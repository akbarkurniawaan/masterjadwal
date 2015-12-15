@extends('adminprodi.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahdaftarmatkul')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Mata Kuliah</th>
				<th>Dosen</th>
				<th>Prodi</th>
				<th>Jumlah Peserta</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
	
 @foreach($daftar_matkul as $dsn)

 			<tr class="gradeX">
				<td>{{$dsn->id_matkul}}</td>
				<td>{{$dsn->id_dosen}}</td>
				<td>{{$dsn->id_prodi}}</td>
				<td>{{$dsn->jumlah_peserta}}</td>												
				<td class="center">
					<a class="btn btn-primary" href="{{ route('editdosen', $dsn->id_dosen) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapusdosen', $dsn->id_dosen) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach


		</tbody>		
	</table>
</div>

@stop
