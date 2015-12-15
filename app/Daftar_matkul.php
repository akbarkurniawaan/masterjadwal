<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_matkul extends Model
{
    //
	protected $table = "daftar_matkul";

	protected $primaryKey = "id_daftar_matkul";	

	protected $fillable = ['id_matkul','id_dosen','id_prodi','jumlah_peserta'];      
}
