<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Karyawan;

class karyawancontroller extends Controller
{
    public function welcome() {

    	$table = 'karyawan';
    	$filltable = Karyawan::all();
    	return view('welcome', compact('table', 'filltable'));
	}

	public function create() {	
    	return view('create');
	}

	public function store(Request $request) {	
		$this->validate($request, [
			'nik' => 'required',
			'nama' => 'required',
			'alamat' => 'required',
			'email' => 'required',
			'divisi' => 'required',
			'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
		]);

		$file = $request->file('foto');
		$imageKaryawan = $request->nik . '_' . date('dmY') . '.' . $file->getClientOriginalExtension();
		$file->move(public_path("uploads "), $imageKaryawan);
		// $insert['foto'] = "$imageKaryawan";

		Karyawan::create([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'email' => $request->email,
			'divisi' => $request->divisi,
			'foto' => $insert['foto'] = "$imageKaryawan"
		]);

    	return redirect('/welcome');
	}

	public function delete($id){

		$delete = Karyawan::find($id);
    	$delete->delete();

    	return redirect('welcome');
	}

	public function update($id){
		$datas = Karyawan::select('id', 'nik', 'nama', 'alamat', 'email', 'divisi','foto')
                    ->where('id', '=', $id)
    				->first();

    	return view('update', compact('datas'));
	}

	public function updateStore(Request $request){

		$id = $request['id'];

    	$update = Karyawan::where('id', $id)->first();
        $update->nik =  $request['nik'];
        $update->nama = $request['nama'];
        $update->alamat = $request['alamat'];
        $update->email = $request['email'];
        $update->divisi = $request['divisi'];
        $update->foto = $request['foto'];

        $update->update();

    	return redirect('welcome');
	}
}
