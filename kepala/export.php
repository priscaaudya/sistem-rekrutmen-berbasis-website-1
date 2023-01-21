<?php
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  $date_now = date("Y-m-d");
  include '../koneksi.php';
?>
<html>
<head>
  <title>Data Pelamar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../assets/foto/logooo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <style type="text/css">
    h2{
      padding-top: 1em;
      padding-bottom: 2em;
    }

  </style>

</head>

<body>
<div class="container">
			<h2 align="center">Data Pelamar</h2> 
				<div class="data-tables datatable-dark">
           <table id="exportdata" class="display" style="width:100%;"><thead class="thead-dark">
              <tr align="center">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Status</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Tanggal Submit</th>
                  <!--<th>Opsi</th>-->
              </tr></thead><tbody>
              <?php 
              $job1=mysqli_query($conn,"SELECT * from pendaftaran p INNER JOIN lowongan l ON p.idjob=l.id INNER JOIN seleksi s ON p.id_pelamar=s.id_pelamar order by p.id_pelamar DESC");
              $no=1;
              while($p=mysqli_fetch_array($job1)){
                  $id = $p['id_pelamar'];
                  $nama = $p['nama'];
                  $posisi = $p['nama_job'];
                  $pend = $p['pendidikan'];
                  $info = $p['info'];
                  $adr = $p['alamat'];
                  $nohp = $p['no_telp'];
                  $email = $p['email'];
                  $jk = $p['jk'];
                  $dob = $p['tgl_lahir'];
                  $submit = $p['tgl_submit'];
                  $cv = $p['cv'];
                  $syarat =  $p['syarat'];
                  ?>
                  
                  <tr>
                      <form action="pelamar.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="ids" value="<?php echo $id ?>">
                          <td align="center"><?php echo $no++ ?></td>
                          <td><?php echo $nama ?></td>
                          <td><?php echo $posisi ?></td>
                          <td align="center">
                              <?php
                                  if($syarat==1){
                                      echo "Memenuhi syarat";
                                  }else{
                                      echo"Tidak Memenuhi";
                                  }
                              ?>
                          </td>
                          <td align="center"><?php echo $adr?></td>
                          <td align="center"><?php echo $email?></td>
                          <td align="center"><?php echo $nohp?></td>
                          <td align="center"><?php echo $submit?></td>                          
                      </form>
                  </tr>
                  <?php 
              }

              
                  
              ?>
          </tbody>
          </table>

					

					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#exportdata').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>