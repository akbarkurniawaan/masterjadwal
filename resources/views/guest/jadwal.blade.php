 @extends('guest.base')
@section('content')
    <div class="panel panel-warning">
             <div class="panel-heading">
             Selamat Datang
             </div>
             <div class="panel-body">
       
      <div class="table-responsive">
            <table class="table table-hover">
            <thead>
            <tr>          
              <th>Hari</th>
              <th>Jam</th> 
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Ruangan</th>
              <th>Dosen</th> 
              <th>Program Studi</th>               
            </tr>
      </thead>
      <tbody>
            <tr>          
              <td>Senin</td>
              <td>08:00</td>
              <td>Kalkulus</td>     
              <td>2</td>
              <td>A16</td>
              <td>Jack Ryan</td>
              <td>Teknik Elektro</td>              
            </tr>
            <tr>          
              <td>Senin</td>
              <td>12:00</td>
              <td>Bahasa Indonesia</td>     
              <td>3</td>
              <td>A16</td>
              <td>Iron Man</td>
              <td>Teknik Elektro</td>              
            </tr>            
      </tbody>
            </table>
            </div>
       
             <div class="panel-footer halus">
             **Hubungi admin jika ada kesalahan jadwal
             </div>
        </div>
      
    <br><br><br><br><br><br>
 
@stop   

