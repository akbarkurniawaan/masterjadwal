<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Matkul;
use App\Daftar_matkul;
use App\Dosen;
use App\Prodi;
class adminprodiController extends Controller
{
    //
	public function adminprodi()
	{
		return view('adminprodi.beranda');
	}      

	  	public function matkul()
	{
  		$matkul = Matkul::orderBy('created_at', 'desc')->get();

		return view('adminprodi.matkul', compact('matkul'));
	}

	public function tambahmatkul()
	{
		return view('adminprodi_matkul.tambahmatkul');
	}

	public function simpanmatkul(Request $request)
	{
		$input = $request->all();

		matkul::create($input);

		return redirect('/adminprodi/matkul')->with('sukses', 'Berita sudah ditambah');
	}

	public function editmatkul($id_matkul)
	{
        $editmatkul = Matkul::find($id_matkul);

		return view('adminprodi_matkul.editmatkul', compact('editmatkul'));
	}	

	public function updatematkul(Request $request, $id_matkul)
	{
		$matkul = Matkul::find($id_matkul);
		$input = $request->all();		

		$matkul->update($input);	


		return redirect('/adminprodi/matkul')->with('sukses', 'Berita sudah diupdate');

	}

	public function hapusmatkul($id_matkul)
	{
		$matkul = Matkul::find($id_matkul);

        return view('adminprodi_matkul.tampildeletematkul', compact('matkul'));
	}	

	public function deletematkul($id_matkul)
	{
		$matkul = Matkul::find($id_matkul);
		$matkul->delete();
		return redirect('/adminprodi/matkul');
	}	


	  	public function daftarmatkul()
	{
  		$daftar_matkul = Daftar_matkul::orderBy('created_at', 'desc')->get();			
  		$matkul = Matkul::orderBy('created_at', 'desc')->get();	
  		$dosen = Dosen::orderBy('created_at', 'desc')->get();  	
  		$prodi = Prodi::orderBy('created_at', 'desc')->get();  	
		return view('adminprodi.daftar_matkul', compact('matkul','dosen','prodi','daftar_matkul'));
	}

	public function tambahdaftarmatkul()
	{
  		$matkul = Matkul::orderBy('created_at', 'desc')->get();	
  		$dosen = Dosen::orderBy('created_at', 'desc')->get();  	
  		$prodi = Prodi::orderBy('created_at', 'desc')->get();  	  		 					
		return view('adminprodi_daftarmatkul.tambahdaftar_matkul', compact('matkul','dosen','prodi'));
	}

	public function simpandaftarmatkul(Request $request)
	{
		$input = $request->all();

		Daftar_matkul::create($input);

		return redirect('/adminprodi/matkul')->with('sukses', 'Berita sudah ditambah');
	}	

	public function dosen()
	{
  		$dosen = Dosen::orderBy('created_at', 'desc')->get();
		
		return view('adminprodi.dosen', compact('dosen'));
	}	

	public function tambahdosen()
	{
		return view('adminprodi_dosen.tambahdosen');
	}

	public function simpandosen(Request $request)
	{
		$input = $request->all();

		dosen::create($input);

		return redirect('/adminprodi/dosen')->with('sukses', 'Berita sudah ditambah');
	}

	public function editdosen($id_dosen)
	{
        $editdosen = Dosen::find($id_dosen);

		return view('adminprodi_dosen.editdosen', compact('editdosen'));
	}	

	public function updatedosen(Request $request, $id_dosen)
	{
		$dosen = Dosen::find($id_dosen);
		$input = $request->all();		

		$dosen->update($input);	


		return redirect('/adminprodi/dosen')->with('sukses', 'Berita sudah diupdate');

	}

	public function hapusdosen($id_dosen)
	{
		$dosen = Dosen::find($id_dosen);

        return view('adminprodi_dosen.tampildeletedosen', compact('dosen'));
	}	

	public function deletedosen($id_dosen)
	{
		$dosen = Dosen::find($id_dosen);
		$dosen->delete();
		return redirect('/adminprodi/dosen');
	}	




}
