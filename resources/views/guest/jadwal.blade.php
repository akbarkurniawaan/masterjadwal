 @extends('guest.base2')
@section('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container-fluid">
  <div class="row">

    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Jadwal Perkuliahan</div>
        <div class="panel-body">
  <div class="table-responsive">                    
          <table  id="example1"  class="table table-striped course_table">
          <thead>
            <tr>          
              <th>Nama Mata Kuliah</th>
              <th>SKS</th> 
              <th>Prodi</th>
              <th>Dosen Pengampu</th>
              <th>Hari</th>
              <th>Jam Masuk</th> 
              <th>Jam Keluar</th>
              <th>Ruangan</th>                
            </tr>
          </thead>
          <tbody>
            <tr>          
              <td>Proyek Kelompok</td>
              <td>2</td>
              <td>Teknik Informatika</td>     
              <td>Mr. X</td>
              <td>Senin</td>
              <td>08:00</td>
              <td>13:00</td>     
              <td>A-16</td>              
            </tr>
            <tr>          
              <td>Proyek Kelompok</td>
              <td>2</td>
              <td>Teknik Informatika</td>     
              <td>Mr. X</td>
              <td>Senin</td>
              <td>08:00</td>
              <td>13:00</td>     
              <td>A-16</td>              
            </tr>            
          </tbody>
          </table>    
    </div>
        </div>
      </div>
    </div>
  </div>
</div>

 
@stop   

