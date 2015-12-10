@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpandosen')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
			<div class="control-group">
				<label class="control-label" for="nip_dosen">NIP Dosen</label>
				<div class="controls">
					<input type="text" name="nip_dosen" id="basicinput" placeholder="Masukkan NIP Dosen" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_dosen">Nama Dosen</label>
				<div class="controls">
					<input type="text" name="nama_dosen" id="basicinput" placeholder="Masukkan Nama Dosen" class="span8">
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