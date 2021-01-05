<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	// fungsi untuk menampilkan view home
    public function index(){
        return view('home');
    }

    // fungsi untuk menampilkan view about
    public function about(){
        return view('about');
    }
}
