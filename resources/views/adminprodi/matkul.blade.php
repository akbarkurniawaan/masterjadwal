@extends('adminprodi.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahmatkul')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Kode Mata Kuliah</th>
				<th>Nama Mata Kuliah</th>
				<th>SKS</th>								
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	
 @foreach($matkul as $mtl)

 			<tr class="gradeX">
				<td>{{$mtl->kode_matkul}}</td>
				<td>{{$mtl->nama_matkul}}</td>
				<td>{{$mtl->sks}}</td>				
				<td class="center">
					<a class="btn btn-primary" href="{{ route('editmatkul', $mtl->id_matkul) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapusmatkul', $mtl->id_matkul) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach


		</tbody>
	</table>
</div>

@stop