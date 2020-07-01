<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**class Mahasiswa extends Model
{
    //
}*/

class Mahasiswa extends Model
{
	protected $table = "tb_mhsw";
	protected $primaryKey = 'mhsw_id';
	protected $fillable = ['mhsw_nim', 'mhsw_nama','mhsw_jurusan','mhsw_alamat'];
}