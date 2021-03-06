<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Karyawan;
use App\Divisi;


use App\Exports\KaryawanExport;
use Maatwebsite\Excel\Facades\Excel;

class karyawancontroller extends Controller
{
    public function welcome(Request $request) {

    	// $filltable = Karyawan::all();
    	// $filltable = Karyawan::paginate(3);
    	// $divisi = Divisi::all();
    	// return view('welcome', ['filltable' => $filltable], compact('filltable', 'divisi'));

    	$filltable = Karyawan::when($request->search, function($query) use($request){
    		$query->where('nama', 'LIKE', '%'.$request->search.'%');
    	})->paginate(3);

    	return view('karyawan.welcome', compact('filltable'));
	}

	// public function search(Request $request) {
	// 	$cari = $request->cari;

	// 	$karyawan = DB::table('karyawan')
	// 				->where('nik', 'LIKE', "%{$request->search}%")
	// 				->orWhere('nama', 'LIKE', "%{$request->search}%")
	// 				->orWhere('alamat', 'LIKE', "%{$request->search}%")
	// 				->orWhere('email', 'LIKE', "%{$request->search}%")
	// 				->paginate();
	// 	return view('welcome', ['filltable' => $filltable]);
	// }

	public function create() {	
		$divisi = Divisi::all();
    	return view('karyawan.create', compact('divisi'));
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
    	$divisi = Divisi::all();
    	return view('karyawan.update', compact('datas', 'divisi'));
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

	public function export_excel(){
		return Excel::download(new KaryawanExport, date('d-m-Y_').'karyawan_'.date('h-ia').'.xlsx');
	}
}
