<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Karyawan;
use App\Divisi;
use PDF;

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

    public function buka(){
    	$user = User::all();
    	$karyawan = Karyawan::all();
    	$divisi = Divisi::all();

    	return view('pdf', compact('user', 'karyawan', 'divisi') );
    }

    public function cetak_pdf(){
    	$user = User::all();
    	$karyawan = Karyawan::all();
    	$divisi = Divisi::all();
 
    	$pdf = PDF::loadview('pdf', compact('user', 'karyawan', 'divisi'));
    	return $pdf->download('NF-Corp Data '.date('d-m-Y ').'on'.date(' h-ia').'.pdf');
    }
}
