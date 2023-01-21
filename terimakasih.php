<?php 
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  include 'koneksi.php';
  $date_now = date("Y-m-d", strtotime("-16 years"));
  $getid = $_GET['id'];
  $sql = mysqli_query($conn,"select * from lowongan where id='$getid'");
  $p = mysqli_fetch_array($sql);
      $idjob = $p['id'];
      $pengumuman = date_format(date_create($p['tgl_pgm']),"d M Y");
                    
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Terima kasih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/foto/logooo.png">
    <meta content="" name="description">
    <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- CSS -->
  <style type="text/css">
    .thx {
      margin : 6em 3em 0 3em;
    }

    h1 {
      margin-bottom: 1em;
    }

    .lead {
      margin: 0 3em 0 3em;
      text-align: center;
    }

    .btn {
      margin-top: 1em;
    }
  </style>

</head>

<body>

<body style="font-family:verdana">

<div class="thx">
  <h1 class="display-3" align="center">Terima Kasih!</h1>
  <p class="lead"><strong>Terima kasih telah mengajukan pendaftaran pekerjaan Anda.</strong> <br>
    Pengumuman akan diumumkan pada tanggal <?=$pengumuman;?>.
  <p class="lead">
	<a  class="btn btn-danger btn-sm" href="index.php" role="button">Kembali Ke Halaman Utama</a>
  </p>
</div>


</body>
</html>