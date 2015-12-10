<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
	protected $table = "ruangan";

	protected $primaryKey = "id_ruangan";

	protected $fillable = ['nama_ruangan','kapasitas_ruangan'];     
}
