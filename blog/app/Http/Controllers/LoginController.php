<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create()
    {
        return view('session.create');
    }

    //save user input login
    public function store()
    {
        if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
    			'message' => 'Please check your credentials and try again.'
            ]);
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
