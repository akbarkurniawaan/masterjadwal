<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prodi;
use App\tahun_ajaran;
use App\ruangan;
class UPTController extends Controller
{
    //
	public function upt()
	{
		return view('upt.beranda');
	}    

	public function prodi()
	{

  		$prodi = Prodi::orderBy('created_at', 'desc')->get();

		return view('upt.prodi', compact('prodi'));
	}	

	public function tambahprodi()
	{
		return view('upt_prodi.tambahprodi');
	}

	public function simpanprodi(Request $request)
	{
		$input = $request->all();

		prodi::create($input);

		return redirect('/upt/prodi')->with('sukses', 'Berita sudah ditambah');
	}

	public function editprodi($id_prodi)
	{
        $editprodi = Prodi::find($id_prodi);

		return view('upt_prodi.editprodi', compact('editprodi'));
	}	

	public function updateprodi(Request $request, $id_prodi)
	{
		$prodi = Prodi::find($id_prodi);
		$input = $request->all();		

		$prodi->update($input);	


		return redirect('/upt/prodi')->with('sukses', 'Berita sudah diupdate');

	}

	public function hapusprodi($id_prodi)
	{
		$prodi = Prodi::find($id_prodi);

        return view('upt_prodi.tampildeleteprodi', compact('prodi'));
	}	

	public function deleteprodi($id_prodi)
	{
		$prodi = Prodi::find($id_prodi);
		$prodi->delete();
		return redirect('/upt/prodi');
	}	

	public function tahun_ajaran()
	{
  		$tahun_ajaran = tahun_ajaran::orderBy('created_at', 'desc')->get();
				
		return view('upt.tahun_ajaran', compact('tahun_ajaran'));
	}

	public function tambahtahun_ajaran()
	{
		return view('upt_tahun_ajaran.tambahtahun_ajaran');
	}

	public function simpantahun_ajaran(Request $request)
	{
		$input = $request->all();

		tahun_ajaran::create($input);

		return redirect('/upt/tahun_ajaran')->with('sukses', 'Berita sudah ditambah');
	}

	public function edittahun_ajaran($id_tahunajaran)
	{
        $edittahun_ajaran = tahun_ajaran::find($id_tahunajaran);

		return view('upt_tahun_ajaran.edittahun_ajaran', compact('edittahun_ajaran'));
	}	

	public function updatetahun_ajaran(Request $request, $id_tahunajaran)
	{
		$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);
		$input = $request->all();		

		$tahun_ajaran->update($input);	


		return redirect('/upt/tahun_ajaran')->with('sukses', 'Berita sudah diupdate');

	}

	public function hapustahun_ajaran($id_tahunajaran)
	{
		$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);

        return view('upt_tahun_ajaran.tampildeletetahun_ajaran', compact('tahun_ajaran'));
	}	

	public function deletetahun_ajaran($id_tahunajaran)
	{
		$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);
		$tahun_ajaran->delete();
		return redirect('/upt/tahun_ajaran');
	}	

	public function ruangan()
	{
 		$ruangan = ruangan::orderBy('created_at', 'desc')->get();
						
		return view('upt.ruangan', compact('ruangan'));
	}

	public function tambahruangan()
	{
		return view('upt_ruangan.tambahruangan');
	}

	public function simpanruangan(Request $request)
	{
		$input = $request->all();

		ruangan::create($input);

		return redirect('/upt/ruangan')->with('sukses', 'Berita sudah ditambah');
	}

	public function editruangan($id_ruangan)
	{
        $editruangan = ruangan::find($id_ruangan);

		return view('upt_ruangan.editruangan', compact('editruangan'));
	}	

	public function updateruangan(Request $request, $id_ruangan)
	{
		$ruangan = ruangan::find($id_ruangan);
		$input = $request->all();		

		$ruangan->update($input);	


		return redirect('/upt/ruangan')->with('sukses', 'Berita sudah diupdate');

	}

	public function hapusruangan($id_ruangan)
	{
		$ruangan = ruangan::find($id_ruangan);

        return view('upt_ruangan.tampildeleteruangan', compact('ruangan'));
	}	

	public function deleteruangan($id_ruangan)
	{
		$ruangan = ruangan::find($id_ruangan);
		$ruangan->delete();
		return redirect('/upt/ruangan');
	}	


	public function penjadwalan()
	{
		return view('upt.penjadwalan');
	}			
}
