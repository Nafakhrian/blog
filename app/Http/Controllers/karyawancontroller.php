<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class karyawancontroller extends Controller
{
    public function welcome() {

    	$table = 'karyawan';
    	$filltable = Karyawan::all();
    	return view('welcome', compact('table', 'filltable'));
	}
}
