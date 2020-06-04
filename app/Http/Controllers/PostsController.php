<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Intervention\Image\Facades\Image;
class PostsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

   public function createPost(){

       return view('posts.create');
   }

    public function store(Request $request)
    {
        $data = $request->validate([

            //This will ignore user_id filled, because no need to validate user_id field.And all data we will get inside $data[]
            //'another' =>'',
            'caption' =>'required',
            'image' => 'required|image'
        ]);

     /*     Image will store inside storage folder and it will create uploads
          folder inside public dir and save the image
          But this image will not accessable directly.we need to make it public.
          for that we have to create symlink using-  php artisan storage:link*/

       $imagePath = $data['image']->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath }"))->fit(1200,1200);
        $image->save();
        //Automatically insert user_id to post table
        Auth::user()->posts()->create([
            'caption' =>$data['caption'],
            'image'  => $imagePath
        ]);
        //One way to save post
        /*  $post = new Post();
                $post->user_id = Auth::user()->id;
                $post->caption = $data['caption'];
                $post->image= $data['image'];

                $post->save();
                 or
          Post::create($data);
          */
      return redirect('/profiles/'.Auth::user()->id);

    }

    public  function  show(Post $post){

        return view('posts.show',compact('post'));
    }
}
