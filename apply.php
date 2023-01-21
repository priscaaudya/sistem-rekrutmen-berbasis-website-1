<?php 
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  include 'koneksi.php';
  $date_now = date("Y-m-d", strtotime("-16 years"));
  $getid = $_GET['id'];
  $sql = mysqli_query($conn,"select * from lowongan where id='$getid'");
  $p = mysqli_fetch_array($sql);
    $idjob = $p['id'];
    $namajob = $p['nama_job'];


      if(isset($_POST['submit'])){

          $a = $_POST['nama'];
          $b = $_POST['tgl_lahir'];
          $c = $_POST['jeniskelamin'];
          $d = $_POST['pendidikan'];
          $e = $_POST['alamat'];
          $f = $_POST['email'];
          $g = $_POST['no_telp'];
          $h = $_POST['info'];
          $i = $_POST['tgl_submit'];


            $nama_file = $_FILES['file']['name'];
            $ukuran_file = $_FILES['file']['size'];
            $tipe_file = pathinfo($nama_file,PATHINFO_EXTENSION);
            $random = md5(uniqid($nama_file, true) . time());
            $tmp_file = $_FILES['file']['tmp_name'];
            $path = "cv/".$random.'.'.$tipe_file;

      if($tipe_file == 'pdf'){ 
        if($ukuran_file <= 5000000){ 
          if(move_uploaded_file($tmp_file, $path)){ 

          $insertdata = mysqli_query($conn,"insert into pendaftaran (idjob, nama, tgl_lahir, jk, pendidikan, alamat,email,no_telp, info, tgl_submit, cv, aksi ) values('$idjob','$a','$b', '$c', '$d','$e','$f','$g','$h', '$i', '$path', '0')");
      
          if($insertdata){
            echo "<script>alert('Pendaftaran Berhasil')</script>";
            echo "<script>location='index.php'</script>";
          } else {
              echo 'Gagal
              <meta http-equiv="refresh" content="3" />';
          }
        }
      }
    }
  };         
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Daftar <?=$namajob;?></title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mainn.css" /> 
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  <!-- =======================================================
  * Template Name: Day - v3.0.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/foto/logoputih.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          <li><a href="lowongan.php?id=<?=$idjob;?>"><?=$namajob;?> </a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <main id="main">

              <section id="first" class="main special">
                <header class="major">
                  <h2>Daftar Posisi <?=$namajob;?></h2>
                </header>
                

                        <form method="post" action="" enctype="multipart/form-data" method="post" id="myform">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    Nama
                                  <input type="text" name="nama" id="nama" placeholder="Nama" / required>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    Email
                                  <input type="email" name="email" placeholder="Email" / required>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    Tanggal Lahir
                                  <input type="date" class="form-control" name="tgl_lahir" min="1970-01-02" max="<?=$date_now;?>" required>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    Jenis Kelamin
                                  <select name="jeniskelamin">
                                    <option  value="" disabled selected hidden> Jenis Kelamin </option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option></select>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    Alamat
                                  <input type="text" name="alamat" placeholder="Alamat" / required>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    Telepon (Whatsapp) dimulai dengan +62
                                  <input type="text" name="no_telp" min="1" value="+62"required>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                  Jenjang Pendidikan
                                  <select name="pendidikan" placeholder="Jenjang Pendidikan" required>
                                      <option value="" disabled selected hidden>Jenjang Pendidikan</option>
                                      <option value="SMA">SMA / SMK</option>
                                      <option value="S1">Diploma 1 / D1</option>        
                                      <option value="S1">Diploma 3 / D3</option>
                                      <option value="S1">Sarjana / S1</option>
                                      <option value="S2">Magister / S2</option>
                                      <option value="S3">Doktor / S3</option>
                                  </select>
                                  <span class="select-btn">
                                      <i class="zmdi zmdi-chevron-down"></i>
                                  </span>
                                </div>
                                <div  class="col-6 col-12-xsmall">
                                  <label>Upload Berkas (PDF max 5MB)</label>
                                  <input type="file" name="file" class="form-control-file border"  accept="application/pdf" required>
                                </div>
                                <div class="col-12">
                                  Informasi tambahan
                                  <textarea name="info" placeholder="Jelaskan mengapa kamu orang yang tepat untuk pekerjaan ini" rows="6" required></textarea>
                                </div>
                                      <input type="hidden" name="tgl_submit" value="<?php echo date("Y-m-d H:i:s") ?>">
                                <div class="col-12" class="form-row-last" align="center">
                                      <input type="submit" name="submit" class="btn btn-warning" value="Kirim Lamaran">
                                </div>
                        </div>
                </form>
            </section>
        </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Prisca Audya</span></strong> 
      </div>
    </div>
  </footer><!-- End Footer -->            
</body>
</html>