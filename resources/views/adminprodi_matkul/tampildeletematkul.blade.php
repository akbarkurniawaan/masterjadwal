@extends('adminprodi.base')


@section('content')
	<h1>Apakah anda yakin akan menghapus data ini?</h1>
	<h1>" {{ $matkul->nama_matkul }} "</h1>
    <form action="{{ route('deletematkul', $matkul->id_matkul) }}" method="post" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" class="btn btn-lg btn-success" value="Delete"> 
    </form>
@stop

