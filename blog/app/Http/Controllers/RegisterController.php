<?php

namespace App\Http\Controllers;

use App\User;


class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate the form
        $user = new User;
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);
        //create and save the user
        $user = User::create(request(['name', 'email','password']));

        //sign user in by Laravel
        // \Auth::login();
        auth()->login($user);

        //redirect
        return redirect('/');
    }
}
