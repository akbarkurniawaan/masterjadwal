       <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index.html">FT <span>UNLAM</span></a>            
            <!-- IMG BASED LOGO  -->
             <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->           
                   
          </div>


          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="{{ URL::route('beranda') }}">Home</a></li>
              <li><a href="{{ URL::route('jadwal') }}">Jadwal</a></li>
              <li><a href="{{ URL::route('pengelolaan') }}">Pengelolaan</a></li>
              <li><a href="{{ URL::route('kontak') }}">Kontak</a></li>
              <li><a href="{{ URL::route('beritaperubahan') }}">Berita Perubahan</a></li>                
            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  