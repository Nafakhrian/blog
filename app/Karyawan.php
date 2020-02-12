<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Divisi;

class Karyawan extends Model
{
    public $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $fillable = ['nik','nama','alamat','email','divisi','foto'];

    public function divisi(){
    	return $this->belongsTo(Divisi::class, 'id_div');
    }
}
