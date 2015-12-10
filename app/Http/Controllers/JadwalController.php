<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    //
	public function jadwal()
	{

		return view('guest.jadwal');
	}      
}
