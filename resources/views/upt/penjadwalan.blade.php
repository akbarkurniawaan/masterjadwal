@extends('upt.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Nama Mata Kuliah</th>
				<th>SKS</th>
				<th>Prodi</th>
				<th>Dosen PA</th>
				<th>Hari</th>
				<th>Jam Masuk</th>
				<th>Jam Keluar</th>
				<th>Ruangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr class="gradeA">
				<td>Kalkulus</td>
				<td>3</td>
				<td>Teknik Sipil</td>
				<td>Mr x</td>
				<td>Senin</td>
				<td>8.50</td>
				<td>10.30</td>
				<td>A-16</td>
				<td class="center">
					<a class="btn btn-primary">Edit</a>
					<a class="btn btn-primary">Delete</a>		
				</td>
			</tr>
			<tr class="gradeA">
				<td>Kalkulus</td>
				<td>3</td>
				<td>Teknik Sipil</td>
				<td>Mr x</td>
				<td>Senin</td>
				<td>8.50</td>
				<td>10.30</td>
				<td>A-16</td>
				<td class="center">
					<a class="btn btn-primary">Edit</a>
					<a class="btn btn-primary">Delete</a>		
				</td>
			</tr>
	</table>
</div>
@stop