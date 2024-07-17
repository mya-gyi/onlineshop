<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //profile index

    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
