@extends('upt.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('updateruangan', $editruangan->id_ruangan)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="patch">	
			<div class="control-group">
				<label class="control-label" for="nama_ruangan">Prodi</label>
				<div class="controls">
					<input type="text" name="nama_ruangan" id="basicinput" value="{{ $editruangan->nama_ruangan }}" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="kapasitas_ruangan">Prodi</label>
				<div class="controls">
					<input type="text" name="kapasitas_ruangan" id="basicinput" value="{{ $editruangan->kapasitas_ruangan }}" class="span8">
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