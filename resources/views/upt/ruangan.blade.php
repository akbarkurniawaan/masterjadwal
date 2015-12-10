@extends('upt.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahruangan')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Nama Ruangan</th>
				<th>Kapasitas Ruangan</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
	 @foreach($ruangan as $rng)
 			<tr class="gradeX">
				<td>{{$rng->nama_ruangan}}</td>
				<td>{{$rng->kapasitas_ruangan}}</td>
				<td class="center">
					<a class="btn btn-primary" href="{{ route('editruangan', $rng->id_ruangan) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapusruangan', $rng->id_ruangan) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach
	</table>
</div>
@stop