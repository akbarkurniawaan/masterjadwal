<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* guest */

Route::get('/', array('as'=>'beranda', 'uses'=> 'WelcomeController@beranda'));

Route::get('jadwal', array('as'=>'jadwal', 'uses'=>'JadwalController@jadwal'));

Route::get('pengelolaan', array('as'=>'pengelolaan', 'uses'=>'PengelolaanController@pengelolaan'));

Route::get('kontak', array('as'=>'kontak', 'uses'=>'KontakController@kontak'));

Route::get('beritaperubahan', array('as'=>'beritaperubahan', 'uses'=>'BeritaperubahanController@beritaperubahan'));

/* guest */


/* upt */
Route::get('upt', array('as'=> 'upt', 'uses'=> 'UPTController@upt'));

/* upt prodi */
Route::get('upt/prodi', 
			['as'=>'prodi',
			'uses' =>'UPTController@prodi']);

Route::get('upt/tambahprodi', 
			['as'=>'tambahprodi',
			'uses' =>'UPTController@tambahprodi']);

Route::post('upt/simpanprodi', array('as'=>'simpanprodi', 'uses'=>'UPTController@simpanprodi'));

Route::get('upt/editprodi/{id_prodi}', array('as'=>'editprodi', 'uses'=>'UPTController@editprodi'));

Route::patch('upt/updateprodi/{id_prodi}', array('as'=>'updateprodi', 'uses'=>'UPTController@updateprodi'));

Route::get('upt/prodi/{id_prodi}/delete', array('as'=>'hapusprodi', 'uses'=>'UPTController@hapusprodi'));

Route::delete('upt/prodi/{id_prodi}/delete', array('as'=>'deleteprodi', 'uses'=>'UPTController@deleteprodi'));
/* upt prodi */

/* upt tahun ajar */
Route::get('upt/tahun_ajaran', 
			['as'=>'tahun_ajaran',
			'uses' =>'UPTController@tahun_ajaran']);

Route::get('upt/tambahtahun_ajaran', 
			['as'=>'tambahtahun_ajaran',
			'uses' =>'UPTController@tambahtahun_ajaran']);

Route::post('upt/simpantahun_ajaran', array('as'=>'simpantahun_ajaran', 'uses'=>'UPTController@simpantahun_ajaran'));

Route::get('upt/edittahun_ajaran/{id_tahunajaran}', array('as'=>'edittahun_ajaran', 'uses'=>'UPTController@edittahun_ajaran'));

Route::patch('upt/updatetahun_ajaran/{id_tahunajaran}', array('as'=>'updatetahun_ajaran', 'uses'=>'UPTController@updatetahun_ajaran'));

Route::get('upt/tahun_ajaran/{id_tahunajaran}/delete', array('as'=>'hapustahun_ajaran', 'uses'=>'UPTController@hapustahun_ajaran'));

Route::delete('upt/tahun_ajaran/{id_tahunajaran}/delete', array('as'=>'deletetahun_ajaran', 'uses'=>'UPTController@deletetahun_ajaran'));
/* upt tahun ajar */

/* upt ruangan */
Route::get('upt/ruangan', 
			['as'=>'ruangan',
			'uses' =>'UPTController@ruangan']);

Route::get('upt/tambahruangan', 
			['as'=>'tambahruangan',
			'uses' =>'UPTController@tambahruangan']);

Route::post('upt/simpanruangan', array('as'=>'simpanruangan', 'uses'=>'UPTController@simpanruangan'));

Route::get('upt/editruangan/{id_ruangan}', array('as'=>'editruangan', 'uses'=>'UPTController@editruangan'));

Route::patch('upt/updateruangan/{id_ruangan}', array('as'=>'updateruangan', 'uses'=>'UPTController@updateruangan'));

Route::get('upt/ruangan/{id_ruangan}/delete', array('as'=>'hapusruangan', 'uses'=>'UPTController@hapusruangan'));

Route::delete('upt/ruangan/{id_ruangan}/delete', array('as'=>'deleteruangan', 'uses'=>'UPTController@deleteruangan'));
/* upt ruangan */

Route::get('upt/penjadwalan', 
			['as'=>'penjadwalan',
			'uses' =>'UPTController@penjadwalan']);
/* upt */


/* admin prodi */
Route::get('adminprodi', array('as'=> 'adminprodi', 'uses'=> 'adminprodiController@adminprodi'));

Route::get('adminprodi/matkul', 
			['as'=>'matkul',
			'uses' =>'adminprodiController@matkul']);

Route::get('adminprodi/tambahmatkul', 
			['as'=>'tambahmatkul',
			'uses' =>'adminprodiController@tambahmatkul']);

Route::get('adminprodi/editmatkul/{id_matkul}', array('as'=>'editmatkul', 'uses'=>'adminprodiController@editmatkul'));

Route::patch('adminprodi/updatematkul/{id_matkul}', array('as'=>'updatematkul', 'uses'=>'adminprodiController@updatematkul'));

Route::get('adminprodi/matkul/{id_matkul}/delete', array('as'=>'hapusmatkul', 'uses'=>'adminprodiController@hapusmatkul'));

Route::delete('adminprodi/matkul/{id_matkul}/delete', array('as'=>'deletematkul', 'uses'=>'adminprodiController@deletematkul'));


Route::post('adminprodi/simpanmatkul', array('as'=>'simpanmatkul', 'uses'=>'adminprodiController@simpanmatkul'));

Route::get('adminprodi/daftarmatkul', 
			['as'=>'daftarmatkul',
			'uses' =>'adminprodiController@daftarmatkul']);

Route::get('adminprodi/tambahdaftarmatkul', 
			['as'=>'tambahdaftarmatkul',
			'uses' =>'adminprodiController@tambahdaftarmatkul']);

Route::post('adminprodi/simpandaftarmatkul', array('as'=>'simpandaftarmatkul', 'uses'=>'adminprodiController@simpandaftarmatkul'));

Route::get('adminprodi/dosen', 
			['as'=>'dosen',
			'uses' =>'adminprodiController@dosen']);

Route::get('adminprodi/tambahdosen', 
			['as'=>'tambahdosen',
			'uses' =>'adminprodiController@tambahdosen']);

Route::post('adminprodi/simpandosen', array('as'=>'simpandosen', 'uses'=>'adminprodiController@simpandosen'));

Route::get('adminprodi/editdosen/{id_dosen}', array('as'=>'editdosen', 'uses'=>'adminprodiController@editdosen'));

Route::patch('adminprodi/updatedosen/{id_dosen}', array('as'=>'updatedosen', 'uses'=>'adminprodiController@updatedosen'));

Route::get('adminprodi/dosen/{id_dosen}/delete', array('as'=>'hapusdosen', 'uses'=>'adminprodiController@hapusdosen'));

Route::delete('adminprodi/dosen/{id_dosen}/delete', array('as'=>'deletedosen', 'uses'=>'adminprodiController@deletedosen'));


Route::get('adminprodi/jumlah_peserta', 
			['as'=>'jumlah_peserta',
			'uses' =>'adminprodiController@jumlah_peserta']);

Route::get('adminprodi/tambahjumlah_peserta', 
			['as'=>'tambahjumlah_peserta',
			'uses' =>'adminprodiController@tambahjumlah_peserta']);

Route::post('adminprodi/simpanjumlah_peserta', array('as'=>'simpanjumlah_peserta', 'uses'=>'adminprodiController@simpanjumlah_peserta'));

Route::get('adminprodi/editjumlah_peserta/{id_jumlah_peserta}', array('as'=>'editjumlah_peserta', 'uses'=>'adminprodiController@editjumlah_peserta'));

Route::patch('adminprodi/updatejumlah_peserta/{id_jumlah_peserta}', array('as'=>'updatejumlah_peserta', 'uses'=>'adminprodiController@updatejumlah_peserta'));

Route::get('adminprodi/jumlah_peserta/{id_jumlah_peserta}/delete', array('as'=>'hapusjumlah_peserta', 'uses'=>'adminprodiController@hapusjumlah_peserta'));

Route::delete('adminprodi/jumlah_peserta/{id_jumlah_peserta}/delete', array('as'=>'deletejumlah_peserta', 'uses'=>'adminprodiController@deletejumlah_peserta'));

/* admin prodi */