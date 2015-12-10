@extends('adminprodi.base')

@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahjumlah_peserta')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Jumlah Peserta</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
	
 @foreach($jumlah_peserta as $jml)

 			<tr class="gradeX">
				<td>{{$jml->jumlah_peserta}}</td>			
				<td class="center">
					<a class="btn btn-primary" href="{{ route('editjumlah_peserta', $jml->id_jumlah_peserta) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapusjumlah_peserta', $jml->id_jumlah_peserta) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach
		</tbody>
	</table>
</div>

@stop

