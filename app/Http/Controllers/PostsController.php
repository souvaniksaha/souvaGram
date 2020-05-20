<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
class PostsController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([

            'caption' =>'required',
            'image' => 'required|image'
        ]);

        Auth::user()->posts()->create($data);
    }
}
