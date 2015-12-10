<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    //
	protected $table = "matkul";

	protected $primaryKey = "id_matkul";	

	protected $fillable = ['kode_matkul','nama_matkul', 'sks'];  
}
