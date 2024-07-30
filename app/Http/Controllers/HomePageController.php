<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //index of HomePage
    public function index()
    {
        return view('homepage');
    }
}
