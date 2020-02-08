<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $fillable = ['nik','nama','alamat','email','divisi','foto'];
}
