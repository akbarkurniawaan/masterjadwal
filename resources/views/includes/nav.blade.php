

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row ">
          <div class="pull-right">
          <img src="{{asset('img/logo.png')}}" width="350" height="45">
        </div>
      </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('beranda') }}">FT UNLAM</a>
        </div>
         
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::route('beranda') }}">Beranda</a></li>
            <li><a href="{{ URL::route('pilihjadwal') }}">Jadwal</a></li>
            <li><a href="{{ URL::route('pengelolaan') }}">Pengelolaan</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>        