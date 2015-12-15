@extends('upt.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpanprodi')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
			<div class="control-group">
				<label class="control-label" for="nama_prodi">Prodi</label>
				<div class="controls">
					<input type="text" name="nama_prodi" id="basicinput" placeholder="Masukkan Nama Prodi" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="username">Username</label>
				<div class="controls">
					<input type="text" name="username" id="basicinput" placeholder="Masukkan Username" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<input type="password" name="password" id="basicinput" placeholder="Masukkan Password" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="status">Status</label>
				<div class="controls">
					<input type="text" name="status" id="basicinput" placeholder="Masukkan Password" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="keterangan">Keterangan</label>
				<div class="controls">
					<input type="text" name="keterangan" id="basicinput" placeholder="Masukkan Keterangan | mis: teknik sipil" class="span8">
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