@extends('guest.base')
@section('content')
    <div class="panel panel-warning">
             <div class="panel-heading">
             Pilih Program Studi
             </div>
             <div class="panel-body">
       
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Sipil</a><br>
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Arsitek</a><br>
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Kimia</a><br>
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Lingkungan</a><br>
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Tambang</a><br>
       <a href="{{ URL::route('jadwal') }}" class="btn btn-default btn-lg lebar">Teknik Mesin</a>
      
        </div>
  </div>


  <br/><br/>
  </div>
@stop   
