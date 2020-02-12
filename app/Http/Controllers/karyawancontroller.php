<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Karyawan;

class karyawancontroller extends Controller
{
    public function welcome() {

    	$filltable = Karyawan::all();
    	$filltable = Karyawan::paginate(2);
    	return view('welcome', ['filltable' => $filltable]);
	}

	public function search(Request $request) {
		$cari = $request->cari;

		$karyawan = DB::table('karyawan')
					->where('nik', 'LIKE', "%{$request->srch}%")
					->orWhere('nama', 'LIKE', "%{$request->srch}%")
					->orWhere('alamat', 'LIKE', "%{$request->srch}%")
					->orWhere('email', 'LIKE', "%{$request->srch}%")
					->paginate();
		return view('welcome', ['filltable' => $filltable]);
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
			'foto' => 'required|image|mimes:jpeg,png,jpg|max:4096'
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

	public function updateStore($id,Request $request){
		$this->validate($request, [
			'nik' => 'required',
			'nama' => 'required',
			'alamat' => 'required',
			'email' => 'required',
			'divisi' => 'required',
			'foto' => 'required|image|mimes:jpeg,png,jpg|max:4096'
		]);

		$table = Karyawan::find($id);

		if ($file = $request->file('foto')) {
			$usedImageKaryawan = public_path("uploads/{ $table->foto }");

			if (File::exists($usedImageKaryawan)) {
				unlink($usedImageKaryawan);
			}

			$destinationPath = 'uploads/';
			$imageKaryawan = $request->nik . '_' . date('dmY') . '.' . $file->getClientOriginalExtension();
			$file->move($destinationPath, $imageKaryawan);


			$id = $request['id'];
	    	$update = Karyawan::where('id', $id)->first();
	        $update->nik =  $request['nik'];
	        $update->nama = $request['nama'];
	        $update->alamat = $request['alamat'];
	        $update->email = $request['email'];
	        $update->divisi = $request['divisi'];
	        $update->foto = $insert['foto'] = "$imageKaryawan";

	        $update->update();
		}


    	return redirect('welcome');
	}
}
