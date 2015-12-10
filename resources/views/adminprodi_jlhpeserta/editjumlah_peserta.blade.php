@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('updatejumlah_peserta', $editjumlah_peserta->id_jumlah_peserta)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="patch">	
			<div class="control-group">
				<label class="control-label" for="jumlah_peserta">Jumlah Peserta</label>
				<div class="controls">
					<input type="text" name="jumlah_peserta" id="basicinput" value="{{ $editjumlah_peserta->jumlah_peserta }}" class="span8">
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