@extends('upt.base')


@section('content')
<div class="module-option clearfix">
	<div class="pull-left">
		<a class="btn btn-large btn-danger" href="{{ route('tambahtahun_ajaran')}}">Tambah Data</a>
	</div>
</div>
<div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
		<thead>
			<tr>
				<th>Periode Tahun Ajaran</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
 @foreach($tahun_ajaran as $thn)
 			<tr class="gradeX">
				<td>{{$thn->tahun_ajaran}}</td>

				<td class="center">
					<a class="btn btn-primary" href="{{ route('edittahun_ajaran', $thn->id_tahunajaran) }}">Edit</a>
					<a class="btn btn-primary" href="{{ route('hapustahun_ajaran', $thn->id_tahunajaran) }}">Delete</a>		
				</td>		
			</tr>

  @endforeach
	</table>
</div>
@stop