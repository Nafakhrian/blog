<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Divisi;

class divisicontroller extends Controller
{
    public function create() {	
		$divisi = Divisi::all();
    	return view('createDiv', compact('divisi'));
	}

	public function store(Request $request) {	
		$this->validate($request, [
			'nama_div' => 'required'
		]);

		Divisi::create([
			'nama_div' => $request->nama_div
		]);

    	return redirect('/welcome');
	}

	public function delete($id_div){

		$delete = Divisi::find($id_div);
    	$delete->delete();

    	return redirect('welcome');
	}

	public function update($id_div){
		$datas = Divisi::select('id_div','nama_div')
                    ->where('id_div', '=', $id_div)
    				->first();
    	return view('updateDiv', compact('datas'));
	}

	public function updateStore($id_div,Request $request){
		$this->validate($request, [
			'nama_div' => 'required'
		]);

		$table = Divisi::find($id_div);

		$id_div = $request['id_div'];
	    $update = Divisi::where('id_div', $id_div)->first();
	    $update->nama_div = $request['nama_div'];
	    $update->update();
		
    	return redirect('welcome');
	}
}
