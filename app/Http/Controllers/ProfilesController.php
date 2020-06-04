<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrfail($user);
        return view('profiles.index',   [
                        'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        //Authorizing this particular user for this route
        $this->authorize('update',$user->profile);

        return view('profiles.edit',compact('user'));
    }

    public  function update(Request $request , User $user){
        //Authorizing this particular user for this route
        $this->authorize('update',$user->profile);

        $data = $request->validate([
            'title' =>'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        Auth::user()->profile->update($data);
        return redirect('/profiles/'.Auth::user()->id);
    }
}
