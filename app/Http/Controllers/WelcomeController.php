<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return "Ura! Am reusit!";
        //return view('welcome');
    }
    public function contact()
    {
        //return "Contact me!";
        return view('pages.contact');

    }

}
