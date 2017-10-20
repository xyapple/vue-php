<?php

namespace App\Http\Controllers;

use App\User;

class LoginController extends Controller
{
    //
    public function create()
    {


    }

    public function destroy()
    {
        auth()->logout();

        //redirect
        return redirect('/');
    }
}
