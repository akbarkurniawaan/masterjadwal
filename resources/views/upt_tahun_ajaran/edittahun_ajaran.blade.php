@extends('upt.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('updatetahun_ajaran', $edittahun_ajaran->id_tahunajaran)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="patch">	
			<div class="control-group">
				<label class="control-label" for="nama_prodi">Prodi</label>
				<div class="controls">
					<input type="text" name="tahun_ajaran" id="basicinput" value="{{ $edittahun_ajaran->tahun_ajaran }}" class="span8">
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