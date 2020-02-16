<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
	public $table = "divisi";
	protected $primaryKey = 'id_div';
    protected $fillable = ['nama_div'];

    public function karyawan(){
    	return $this->hasMany('App\Karyawan','divisi','id_div');
    }
}
