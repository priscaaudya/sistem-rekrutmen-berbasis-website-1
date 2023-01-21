<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date_now = date("Y-m-d");
	include '../koneksi.php';
	if($_SESSION['log']!="Logged"){
		header("location:../login.php");
	}
	
	if (isset($_POST["submit"])) {
		$nama_job=$_POST['nama_job'];
		$kualifikasi=$_POST['kualifikasi'];
		$tgl_up=$_POST['tgl_up'];
		$close_date=$_POST['close_date'];
		$tgl_pgm=$_POST['tgl_pgm'];
		$nama_file = $_FILES['img']['name'];
		$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
		$random = md5(uniqid($nama_file, true) . time());
		$ukuran_file = $_FILES['img']['size'];
		$tipe_file = $_FILES['img']['type'];
		$tmp_file = $_FILES['img']['tmp_name'];
		$path = "job/".$random.'.'.$ext;

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		  if($ukuran_file <= 1000000){ 
			if(move_uploaded_file($tmp_file, $path)){ 
			
			  $query = "insert into lowongan values('','$nama_job','$kualifikasi', '$tgl_up', '$close_date', '$tgl_pgm', '$path','Active')";
			  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
			  
		      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		        // Jika Sukses, Lakukan :
		        echo "<script>alert('Data berhasil ditambahkan')</script>";
		        echo "<script>location='index.php'</script>";
		      }else{
		        // Jika Gagal, Lakukan :
		        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		        echo "<br><a href='index.php'>Kembali Ke Halaman Admin</a>";
		      }
		    }else{
		      // Jika gambar gagal diupload, Lakukan :
		      echo "Maaf, Gambar gagal untuk diupload.";
		      echo "<br><a href='index.php'>Kembali Ke Halaman Admin</a>";
		    }
		  }else{
		    // Jika ukuran file lebih dari 1MB, lakukan :
		    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
		    echo "<br><a href='index.php'>Kembali Ke Halaman Admin</a>";
		  }
		}else{
		  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		  echo "<br><a href='index.php'>Kembali Ke Halaman Admin</a>";
		}
	
	};
	
?>
	
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Tambah Lowongan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/foto/logooo.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/metisMenu.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
	<!-- amchart css -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />	
	<!-- others css -->
	<link rel="stylesheet" href="assets/css/typography.css">
	<link rel="stylesheet" href="assets/css/typography.css">
	<link rel="stylesheet" href="assets/css/default-css.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!-- modernizr css -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- ckeditor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>  	
</head>

<body>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	<!-- preloader area start -->
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->
		<div class="sidebar-menu">
			<div class="sidebar-header">
					<a href="index.php"><img src="../assets/foto/logoputih.png" alt="logo" width="100%"></a>
			</div>
			<div class="main-menu">
				<div class="menu-inner">
					<nav>
						<ul class="metismenu" id="menu">
							<li  class="active">
                                <a href="index.php"><span>Lowongan Pekerjaan</span></a>
                            </li>
							<li>
                                <a href="pelamar.php"></i><span>Data Pelamar</span></a>
                            </li>
							<li>
                                <a href="seleksi.php"></i><span>Hasil Seleksi</span></a>
                            </li>
 							<li>
                                <a href="pengumuman.php"><span>Pengumuman</span></a>
                            </li>                              
                            <li>    
								<a href="pesan.php"><span>Pesan</span></a>
							</li>
							<li>
								<a href="akun.php"><span>Ubah Password</span></a>
							</li> 
							<li>
                                <a href="../logout.php" onclick="return confirm('Anda Yakin Ingin Keluar?');"><span>Keluar</span></a>				
							</li>			
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- sidebar menu area end -->
		<!-- main content area start -->
		<div class="main-content">
			<!-- header area start -->
			<div class="header-area">
				<div class="row align-items-center">
                    <!-- profile info & task notification -->
                    <div class="col-md-12 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date" style="font-size: 20px;">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- header area end -->

			<!-- page title area end -->
			<div class="main-content-inner">
			   
				<!-- market value area start -->
				<div class="row mt-5 mb-5">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div align="center">
									<h2>Tambah Lowongan</h2>
								</div>
								<div class="formulir">
									<form action="tlowongan.php" method="post" enctype="multipart/form-data" >
										<div class="form-group">
											<label>Nama Posisi</label>
											<input name="nama_job" type="text" class="form-control" placeholder="Nama Posisi" required>
										</div>
										<div class="form-group">
											<label> Kualifikasi </label>
											<textarea class="ckeditor" id="ckedtor" name="kualifikasi" type="text" class="form-control" placeholder="Kualifikasi" rows="10" cols="60" required></textarea>	
										</div>
										<div class="form-group col-4">
											<label>Tanggal berakhir</label>
											<input name="close_date" type="date" class="form-control" required>
										</div>
										<div class="form-group col-4">
											<label>Tanggal Pengumuman</label>
											<input name="tgl_pgm" type="date" class="form-control" required>
										</div>
										<div class="form-group col-4">
											<label>Gambar</label>
											<input name="img" type="file" class="form-control" required>
										</div>
										<input type="hidden" name="tgl_up" value="<?php echo date("Y-m-d H:i:s") ?>">
										<div class="form-group pull-right">
											<input type="submit" name="submit" class="btn btn-success" value="Simpan">
										</div>
									</form>										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





		<!-- main content area end -->
		<!-- footer area start-->
		<footer>
			<div class="footer-area">
				<p>&copy; Prisca Audya</p>
			</div>
		</footer>
		<!-- footer area end-->		
</div>




	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	
	$(document).ready(function() {
	$('#dataTable3').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'print'
		]
	} );
	
	$('#dataTable2').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'print'
		]
	} );
	
	} );
	</script>
	
	<!-- jquery latest version -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- bootstrap 4 js -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/metisMenu.min.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<script src="assets/js/jquery.slicknav.min.js"></script>
	<!-- start chart js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<!-- start highcharts js -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<!-- start zingchart js -->
	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
	<script>
	zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
	ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
	</script>
	<!-- all line chart activation -->
	<script src="assets/js/line-chart.js"></script>
	<!-- all pie chart -->
	<script src="assets/js/pie-chart.js"></script>
	<!-- others plugins -->
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/scripts.js"></script>

</body>
</html>		