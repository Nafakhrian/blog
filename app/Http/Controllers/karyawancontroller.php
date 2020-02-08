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

	public function create() {	
    	return view('create');
	}

	public function store(Request $request) {	
		$this->validate($request, [
			'nik' => 'required',
			'nama' => 'required',
			'alamat' => 'required',
			'email' => 'required'
		]);
		Karyawan::create([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'email' => $request->email
		]);

    	return redirect('welcome');
	}

	public function delete($id){

		$delete = Karyawan::find($id);
    	$delete->delete();

    	return redirect('welcome');
	}

	public function update($id){
		$datas = Karyawan::select('id', 'nik', 'nama', 'alamat', 'email')
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

        $update->update();

    	return redirect('welcome');
	}
}
