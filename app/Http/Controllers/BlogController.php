<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function home(){
		return view('blok/home');
	}

	public function tentang(){
		return view('blok/tentang');
	}

	public function kontak(){
		return view('blok/kontak');
	}

}
