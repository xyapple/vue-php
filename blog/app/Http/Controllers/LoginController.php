<?php

namespace App\Http\Controllers;

use App\User;

class LoginController extends Controller
{
    //

    public function create()
    {
        return view('session.create');
    }

    //save user input login
    public function store()
    {
        if(!auth()->attempt(['email','password'])){
            return back;
        }
        //redirect
        return redirect('/');
    }

    //logout method
    public function destroy()
    {
        auth()->logout();

        //redirect
        return redirect('/');
    }

}
