<?php 
  session_start();
  date_default_timezone_set("Asia/Bangkok");
  $date_now = date("Y-m-d");
  include 'koneksi.php';
  
  if (isset($_POST["submit"])) {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $subjek=$_POST['subjek'];
        $pesan=$_POST['pesan'];
        $tanggal=$_POST['tanggal'];
        
        $submit = mysqli_query($conn,"insert into pesan (nama, email,subjek, pesan, tanggal) values ('$nama', '$email', '$subjek', '$pesan', '$tanggal')");
        if($submit){
            echo "<script>alert('Berhasil dikirim')</script>";
            echo "<script>location='index.php'</script>";
        } else {
            echo "<script>alert('Gagal dikirim')</script>";
            echo "<script>location='index.php'</script>"; 
        }
  };                  

  
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>RS Ananda Purwokerto – Kesehatan Anda, Kebahagiaan Kami</title>
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
          <li class="active"><a href="index.php">Beranda</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#Lowongan">Lowongan</a></li>
          <li><a href="#Pengumuman">Pengumuman</a></li>
          <li><a href="#Kontak">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Selamat Datang</h1>
      <h2>RS Ananda Purwokerto – Kesehatan Anda, Kebahagiaan Kami</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
       <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2 foto" data-aos="fade-left" >
            <img src="assets/foto/sejarah.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3 align="center">  Rumah Sakit Umum Ananda</h3>
            <p class="font-italic" align="justify">
                  Rumah Sakit “Ananda“ Purwokerto semula adalah Rumah Sakit Ibu dan Anak (Rumah Sakit Bersalin) yang diselenggarakan oleh sebuah Yayasan yang bernama “YAYASAN SUTARI“ yang didirikan berdasarkan Akta Notaris Nomor: 39 Tertanggal 20 Februari 1989 di Purwokerto. Yayasan dimaksud merupakan Yayasan Keluarga Bapak Sutari. <br> <br>

                  Penyelenggaraan Rumah Sakit Ibu dan Anak “Ananda“ Purwokerto didasarkan pada Surat Ijin Sementara Rumah Sakit yang dikeluarkan oleh Kepala Kantor Wilayah Departemen Kesehatan Daerah Tingkat I. Propinsi Jawa Tengah Nomor : 29/Kanwil/RSIA/XII/90.S1. Tertanggal 26 Desember 1990. Selanjutnya Surat Ijin Penyelenggara Rumah Sakit yang bersifat tetap dikeluarkan berdasarkan Keputusan Menteri Kesehatan Republik Indonesia Nomor Ym.02.04.3.5.3469 Tertanggal 24 Mei 1993 dan mulai berlaku sejak tanggal 24 Mei 1993 sampai dengan 24 Mei 1998. <br> <br>
                  Pada Awal berdirinya Rumah Sakit “Ananda“ Purwokerto adalah Rumah Sakit Khusus (Rumah Sakit Ibu dan Anak/Rumah Sakit Bersalin). Kemudian perkembangan selanjutnya atau tepatnya sekitar awal 1995, Rumah Sakit Ibu dan Anak ini dikembangkan menjadi Rumah Sakit Umum.Berdasarkan Surat Ijin Penyelenggaraan Rumah Sakit Keputusan Menteri Kesehatan RI Nomor : YM.02.04.3.5.2555.
              </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Lowongan Section ======= -->
    <section id="Lowongan" class="Lowongan">
      <div class="container-fluid">

        <div class="section-title">
          <span>Lowongan</span>
          <h2>Lowongan</h2>
        </div>

        <div class="row">
            <?php
              $sql = mysqli_query($conn,"SELECT * FROM lowongan where status='Active' ORDER BY id DESC");          
                while($p=mysqli_fetch_array($sql)){
                $idjob = $p['id'];
                $namajob = $p['nama_job'];
                $descjob = $p['kualifikasi'];
                $deadline = date_format(date_create($p['close_date']),"d M Y");
            ?>
          <div class="col-lg-3 col-md-6 col-sm-12" >
            <div class="card" >
              <img height="270px" src="admin/<?php echo $p['img']; ?>" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $p['nama_job']; ?></h5> <br>
                <a href="lowongan.php?id=<?=$idjob;?>" class="btn btn-warning">Lihat Syarat</a>
              </div>
            </div> 
          </div>
              <?php
              } ?>
        </div>

<!--
    <div class="container konten-wrapper" align="center">
      <div class="panel panel-default">
        <div class="panel-body main">
          <div class="col-md-8">
            <?php
              $sql = mysqli_query($conn,"SELECT * FROM lowongan where status='Active' ORDER BY id ASC");          
              while ($p=$sql->fetch_assoc()) {
              ?>
            <div class="post">
              <div class="row post-title" align="left">
                <div class="col-sm-12">
                  <a href="<?php echo $base_url."detail.php?id=".$p['id']."&amp;nama_job=".strtolower(str_replace(" ", "-",$p['nama_job'])); ?>">
                    <h4><?php echo strtoupper($p['nama_job']); ?></h4>
                  </a>
                </div>
              </div>
              <div class="row post-content">
                <div class="col-sm-12 excerpt">
                  <img height="150px" src="admin/<?php echo $p['img']; ?>">
                  <?php echo substr($p['kualifikasi'], 0,100); ?>...
                  <a href="<?php echo $base_url."detail.php?id=".$p['id']."&amp;nama_job=".
                  strtolower(str_replace(' ', '-', $p['nama_job'])); ?>"...>
                    Selengkapnya <i class="glyphicon glyphicon-chevron-right"></i>
                  </a>
                </div>
              </div>
              <div class="row post-meta">
                <div class="col-sm-12" align="right">
                  <i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;
                  <?php echo $p['tgl_up']; ?>
                </div>               
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
-->
<!-- table
              <div class="table-wrapper">
              <table class="alt">
                  <thead>
                  <tr bgcolor="#246e23" style="color: white;" >
                      <td>Posisi Tersedia</td>
                      <td>Deadline Pendaftaran</td>
                      <td>Aksi</td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                          $getdata = mysqli_query($conn,"select * from lowongan where close_date> '$date_now'");
                          while($data=mysqli_fetch_array($getdata)){
                          $idjob = $data['id'];
                          $namajob = $data['nama_job'];
                          $descjob = $data['kualifikasi'];
                          $deadline = date_format(date_create($data['close_date']),"d M Y");
                          ?>
                          
                          <tr>
                              
                              <td><?=$namajob;?></td>
                              <td><?=$deadline;?></td>
                              <td><a href="apply.php?id=<?=$idjob;?>" class="btn btn-primary">Detail</a></td>
                          </tr>
                          
                          <?php
                          };

                          ?>
                  </tbody>
              </table>
          </div>
-->

        
        </div>
    </section><!-- End Lowongan Section -->

    <!-- ======= Pengumuman Section ======= -->
    <section id="Pengumuman" class="Pengumuman">
      <div class="container">
        <div class="section-title">
          <span>Pengumuman</span>
          <h2>Pengumuman</h2>
        </div>

          <div class="container konten-wrapper" align="center">
            <div class="panel panel-default">
              <div class="panel-body main">
                <div class="col-md-10">
                  <?php
                    $batas = 4;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
             
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
        
                    
                    $data = mysqli_query($conn,"SELECT * from pengumuman");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);             
                    $sql = mysqli_query($conn,"SELECT * from pengumuman where id >= 1 order by id DESC limit $halaman_awal, $batas");
                    $nomor = $halaman_awal+1;
                    while($p = mysqli_fetch_array($sql)){
                            $idpg = $p['id'];
                            $judul = $p['judul'];
                            $tglp = $p['tgl_post'];    
                            $fpgm = $p['fpgm'];                                         
                    ?>
                  <div class="post">
                    <div class="row post-title" align="left">
                      <div class="col-sm-12">
                          <p><a href="admin/<?php echo $fpgm?>"> <?=$judul;?></a></p>
                        </a>
                      </div>
                    </div>
                    <div class="row post-meta">
                      <div class="col-sm-12" align="right">
                        <i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;
                        <?php echo $p['tgl_post']; ?>
                      </div>               
                    </div>
                  </div>
                  <?php 
                   } 
                  ?>
                </div>
                  <nav>
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous #Pengumuman'"; } ?>> << </a>
                      </li>
                      <?php 
                      for($x=1;$x<=$total_halaman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>#Pengumuman"><?php echo $x; ?></a></li>
                        <?php
                      }
                      ?>        
                      <li class="page-item">
                        <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next #Pengumuman'"; } ?>> >> </a>
                      </li>
                    </ul>
                  </nav>
                  </div>

      </div>
    </section><!-- End Pengumuman Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="Kontak" class="Kontak">
      <div class="container">

        <div class="section-title">
          <span>Kontak</span>
          <h2>Kontak</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Pemuda No.30, Kober, Purwokerto Barat, Kabupaten Banyumas, Jawa Tengah 53132</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>info@rsananda.co.id</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>(0281) 636417</p>
            </div>
          </div>

        </div>
        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.5530896044583!2d109.22371931298856!3d-7.418158166827945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e67e4209eb7%3A0xc60f72f33706f339!2sRS%20Ananda%20Purwokerto!5e0!3m2!1sid!2sid!4v1612878707788!5m2!1sid!2sid" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="index.php" method="post" class="form"  enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subjek" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
                <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d H:i:s") ?>">
               <br><br>
              <div class="text-center"> 
                <input type="submit" name="submit" value="Kirim Pesan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Kontak Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Prisca Audya</span></strong>.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


<!-- 
<div class="container-fluid">
  <div class="row">
    <div class="container konten-wrapper">

      <?php include 'slider.php'; ?>

      <div class="panel panel-default">
        <div class="panel-body main">
          <div class="col-md-8">
          <?php while ($index = $qryIndex->fetch_array()) { ?>
            <div class="post">
              <div class="row post-title">
                <div class="col-sm-12">
                  <a href="<?php echo $base_url."detail.php?id=".$index['id_berita']."&amp;nama_job=".strtolower(str_replace(" ", "-",$index['nama_job'])); ?>">
                    <h2><?php echo strtoupper($index['nama_job']); ?></h2>
                  </a>
                </div>
              </div>
              <div class="row post-meta">
                <div class="col-sm-3">
                  <i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;
                  <a href="<?php echo $base_url."author.php?id=".$index['id_admin']; ?>">
                    <?php echo $index['nama_lengkap']; ?>
                  </a>
                </div>
                <div class="col-sm-3">
                  <i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;
                  <?php echo $index['tgl_posting']; ?>
                </div>
                <div class="col-sm-3">
                  <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;
                  <?php echo $index['dilihat']; ?>x
                </div>
                <div class="col-sm-3">
                  <i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;
                  <a href="<?php echo $base_url."kategori.php?id=".$index['id_kategori']."&amp;".
                  strtolower(str_replace(' ', '-',$index['kategori'])); ?>">
                    <em><?php echo $index['kategori']; ?></em>
                  </a>
                </div>
              </div>
              <div class="row post-content">
                <div class="col-sm-12 excerpt">
                  <img src="<?php echo $base_url."images/".$index['gambar']; ?>" class="wow fadeIn">
                  <?php echo substr($index['teks_berita'], 0,200); ?>...
                  <a href="<?php echo $base_url."detail.php?id=".$index['id_berita']."&amp;nama_job=".
                  strtolower(str_replace(' ', '-', $index['nama_job'])); ?>">
                    Selengkapnya <i class="glyphicon glyphicon-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>

          __>