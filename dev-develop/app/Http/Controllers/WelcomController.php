<?php

namespace App\Http\Controllers;

class WelcomController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
