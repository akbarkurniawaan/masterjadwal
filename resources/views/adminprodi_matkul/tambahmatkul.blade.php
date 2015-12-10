@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpanmatkul')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
			<div class="control-group">
				<label class="control-label" for="kode_matkul">Kode Mata Kuliah</label>
				<div class="controls">
					<input type="text" name="kode_matkul" id="basicinput" placeholder="Masukkan kode mata kuliah" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_matkul">Nama Mata Kuliah</label>
				<div class="controls">
					<input type="text" name="nama_matkul" id="basicinput" placeholder="Masukkan Mata Kuliah" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="sks">SKS</label>
				<div class="controls">
					<input type="text" name="sks" id="basicinput" placeholder="Masukkan SKS" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn" value="save">
				</div>
			</div>			
		</form>
	</div>
@stop