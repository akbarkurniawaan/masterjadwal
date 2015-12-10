
@extends('adminprodi.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahdosen')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>NIP Dosen</th>
				<th>Nama Dosen</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
	
 @foreach($dosen as $dsn)

 			<tr class="gradeX">
				<td>{{$dsn->nip_dosen}}</td>
				<td>{{$dsn->nama_dosen}}</td>				
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
