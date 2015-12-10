@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpanjumlah_peserta')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
			<div class="control-group">
				<label class="control-label" for="jumlah_peserta">Jumlah Peserta</label>
				<div class="controls">
					<input type="text" name="jumlah_peserta" id="basicinput" placeholder="Masukkan Jumlah Peserta" class="span8">
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