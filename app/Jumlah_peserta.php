<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumlah_peserta extends Model
{
    //
	protected $table = "jumlah_peserta";

	protected $primaryKey = "id_jumlah_peserta";	

	protected $fillable = ['jumlah_peserta'];      
}
