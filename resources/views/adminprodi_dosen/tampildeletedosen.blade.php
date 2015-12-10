@extends('upt.base')


@section('content')
	<h1>Apakah anda yakin akan menghapus data ini?</h1>
	<h1>" {{ $dosen->nama_dosen }} "</h1>
    <form action="{{ route('deletedosen', $dosen->id_dosen) }}" method="post" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" class="btn btn-lg btn-success" value="Delete"> 
    </form>
@stop

