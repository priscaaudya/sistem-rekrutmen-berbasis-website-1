<?php 
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  include 'koneksi.php';
  $date_now = date("Y-m-d", strtotime("-16 years"));
  $getid = $_GET['id'];
  $sql = mysqli_query($conn,"select * from pengumuman where id='$getid'");
  $p = mysqli_fetch_array($sql);
      $idpg = $p['id'];
      $judul = $p['judul'];
      $teks = $p['teks'];
      $tgl_post = date_format(date_create($p['tgl_post']),"d M Y");
      $fpgm = $p['fpgm'];                  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title><?=$judul;?></title>
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

          <li><a href="detail.php?id=<?=$idjob;?>"><?=$judul;?></a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


            <div id="main">


              <section id="intro" class="main">
                <div class="spotlight">
                  <div class="content">
                    <header class="major">
                      <h1 align="center"><?=$judul;?></h1>
                    </header>
                      <p><?=$teks;?></p>
                      <p> <a href="admin/<?php echo $fpgm?>"> <?=$judul;?></a></p>
                  </div>
                </div>
              </section>

<!--
              <section id="intro" class="main">
                <div class="spotlight">
                  <table>
                    <tr>
                      <td>
                          <header class="major">
                          <h1><?=$namajob;?></h1>
                          <p>Deadline Pendaftaran <?=$deadline;?></p>
                        </header>                     
                      </td>
                    </tr>
                    <tr>
                      <td width="700px"> <div class="content">
                            <p><?=$descjob;?></p>
                        </div>
                        <img style="height: 500px; width: 500px;" src="admin/<?php echo $p['img']; ?>" class="card-img-top" alt="..." />
                      </td>
                      <td>
                         <div class="btn">
                            <a href="apply.php?id=<?=$idjob;?>" class="btn btn-primary">Daftar</a> <br> <br>
                            <a href="index.php" class="btn btn-danger">Kembali</a>

                        </div>                       
                      </td>                      
                    </tr>
                  </table>
                </div>
              </section>
        
            </div>
-->
  <div class="x">
  </div>
  <div class="tpost">
    <p align="right"> <i class="glyphicon glyphicon-calendar" ></i>&nbsp;&nbsp;
      <?php echo $p['tgl_post']; ?> </p>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Prisca Audya</span></strong>. 
      </div>
    </div>
  </footer><!-- End Footer -->   
</body>
</html>



