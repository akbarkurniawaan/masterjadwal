@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpandaftarmatkul')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		

			<div class="control-group">
				<label class="control-label" for="id_matkul">Mata Kuliah</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="id_matkul" class="span8">
						<option value="">Select here..</option>
						@foreach($matkul as $mtl)
						<option value="{{$mtl->id_matkul}}">{{$mtl->kode_matkul }} - {{$mtl->nama_matkul}}</option>
						@endforeach	
					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="id_dosen">Nama Dosen</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="id_dosen" class="span8">
						<option value="">Select here..</option>
						@foreach($dosen as $dsn)
						<option value="{{$dsn->id_dosen}}">{{$dsn->nama_dosen}}</option>
						@endforeach	
					</select>
				</div>
			</div>		

			<div class="control-group">
				<label class="control-label" for="id_prodi">Prodi</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="id_prodi" class="span8">
						<option value="">Select here..</option>
						@foreach($prodi as $mtl)
						<option value="{{$mtl->id_prodi}}">{{$mtl->nama_prodi}}</option>
						@endforeach	
					</select>
				</div>
			</div>	

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