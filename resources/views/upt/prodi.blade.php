@extends('upt.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahprodi')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Nama Prodi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	
 @foreach($prodi as $nama_prodi)

 			<tr class="gradeX">
				<td>{{$nama_prodi->nama_prodi}}</td>

				<td class="center">
					<a class="btn btn-primary" href="{{ route('editprodi', $nama_prodi->id_prodi) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapusprodi', $nama_prodi->id_prodi) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach


		</tbody>
	</table>
</div>

@stop