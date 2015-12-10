@extends('upt.base')


@section('content')
	<div class="module-body">
		<br />

		<form class="form-horizontal row-fluid" method="POST" action="{{ route('simpantahun_ajaran')}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">		
			<div class="control-group">
				<label class="control-label" for="tahun_ajaran">Tahun Ajaran</label>
				<div class="controls">
					<input type="text" name="tahun_ajaran" id="basicinput" placeholder="Masukkan Tahun Ajaran, mis: 2015/2016" class="span8">
					<span class="help-inline"></span>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn" value="save">
				</div>
			</div>			
		</form>
	</div>
@stop