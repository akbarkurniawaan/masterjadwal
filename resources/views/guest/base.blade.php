<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FT Unlam Penjadwalan</title>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">    
    <script src="{{asset('css/jquery-latest.min.js')}}"></script>
  <script src="{{asset('css/bootstrap.min.js')}}"></script>
  <script src="{{asset('css/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      @include('includes.nav') 

    <div class="container" style="margin-top:50px;">
            <div class="jumbotron">
             @yield('content')
             </div>
</div>


  <!-- Main component for a primary marketing message or call to action -->
    </div>
    </div> <!-- /container -->

    <div id="footer">
      <div class="alamat">
        <div class="container">

        <p align="center"><img src="{{asset('img/lbgray.png')}}" width="143" height="59"><br/>Universitas Lambung Mangkurat<br/>
        Fakultas Teknik<br/>
        Telp. (0341) 551312</p>
      </div>
    </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('css/jquery-latest.min.js')}}"></script>
    <script src="{{asset('css/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('css/bootstrap.min.js')}}"></script>
    <script>
    $(document).ready(function () {
      $('.flexslider').flexslider({
        animation: 'fade',
        controlsContainer: '.flexslider',
        slideshow: true,
        slideshowSpeed: 3500,
        pauseOnHover: true
      });
    });
    </script>

  
    <script type="text/javascript">
      $(document).ready(function(){
        $('#propinsi').change(function(){
          $.getJSON('./pages/kuesioner.php',{action:'getKab', kode_prop:$(this).val()}, function(json){
            $('#kabupaten').html('');
            $.each(json, function(index, row) {
              $('#kabupaten').append('<option value='+row.kode+'>'+row.nama+'</option>');
            });
          });
        });
      });
    </script>



  </body>
</html>
