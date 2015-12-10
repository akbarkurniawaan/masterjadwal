<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    //
	public function kontak()
	{

		return view('guest.kontak');
	}     
}
