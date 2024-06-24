<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function createPetition(){
        return view('pages.create-petition');
    }
    public function agenda(){
        return view('pages.agenda');
    }
    public function discovery(){
        return view('pages.discover');
    }

    public function register(){
        return view('auth.register');
    }
}
