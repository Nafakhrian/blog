<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Karyawan;
use App\Divisi;

class landingcontroller extends Controller
{
    public function index(Request $request){

        $fillkaryawan = Karyawan::when($request->search, function($query) use($request){
    		$query->where('nama', 'LIKE', '%'.$request->search.'%');
    	})->paginate(3);
    	$filldivisi = Divisi::all();
    	$filluser = User::all();

    	return view('landing', compact('filldivisi', 'fillkaryawan', 'filluser'));
    }
}
