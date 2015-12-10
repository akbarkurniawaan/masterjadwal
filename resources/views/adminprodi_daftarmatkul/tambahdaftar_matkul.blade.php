@extends('adminprodi.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpandaftarmatkul')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		

			<div class="control-group">
				<label class="control-label" for="kode_matkul">Kode Mata Kuliah</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="kode_matkul" class="span8">
						<option value="">Select here..</option>
						@foreach($matkul as $mtl)
						<option value="{{$mtl->id_matkul}}">{{$mtl->kode_matkul}}</option>
						@endforeach	
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_matkul">Nama Mata Kuliah</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="nama_matkul" class="span8">
						<option value="">Select here..</option>
						@foreach($matkul as $mtl)
						<option value="{{$mtl->nama_matkul}}">{{$mtl->nama_matkul}}</option>
						@endforeach	
					</select>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="sks">SKS</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="sks" class="span8">
						<option value="">Select here..</option>
						@foreach($matkul as $mtl)
						<option value="{{$mtl->sks}}">{{$mtl->sks}}</option>
						@endforeach	
					</select>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="nama_dosen">Nama Dosen</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="nama_dosen" class="span8">
						<option value="">Select here..</option>
						@foreach($dosen as $dsn)
						<option value="{{$dsn->id_dosen}}">{{$dsn->nama_dosen}}</option>
						@endforeach	
					</select>
				</div>
			</div>		
			<div class="control-group">
				<label class="control-label" for="jumlah_peserta">Jumlah Peserta</label>
				<div class="controls">
					<select tabindex="1" data-placeholder="Select here.." name="jumlah_peserta" class="span8">
						<option value="">Select here..</option>
						@foreach($jumlah_peserta as $jml)
						<option value="{{$jml->id_peserta}}">{{$jml->jumlah_peserta}}</option>
						@endforeach	
					</select>
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