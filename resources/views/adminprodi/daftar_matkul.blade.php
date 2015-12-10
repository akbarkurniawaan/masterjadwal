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
				<th>Kode Mata Kuliah</th>
				<th>Nama Mata Kuliah</th>
				<th>SKS</th>
				<th>Nama Dosen</th>
				<th>Jumlah Peserta</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
			<tr class="gradeA">
				<td>Gecko</td>
				<td>Firefox 2.0</td>
				<td>Win 98+ / OSX.2+</td>
				<td class="center">1.8</td>
				<td class="center">A</td>
				<td class="center">
					<a class="btn btn-primary" href="#">Edit</a>
					<a class="btn btn-primary" href="#">Delete</a>		
				</td>				
			</tr>
		</tbody>
	</table>
</div>

@stop
