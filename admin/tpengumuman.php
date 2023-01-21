<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date_now = date("Y-m-d", strtotime("-16 years"));	
	include '../koneksi.php';
	
	if (isset($_POST["submit"])) {
		$judul=$_POST['judul'];
		$tgl_post=$_POST['tgl_post'];
        $nama_file = $_FILES['file']['name'];
        $ukuran_file = $_FILES['file']['size'];
        $tipe_file = pathinfo($nama_file,PATHINFO_EXTENSION);
        $random = md5(uniqid($nama_file, true) . time());
        $tmp_file = $_FILES['file']['tmp_name'];
        $path = "file/".$random.'.'.$tipe_file;

      if($tipe_file == 'pdf'){ 
        if($ukuran_file <= 5000000){ 
          if(move_uploaded_file($tmp_file, $path)){ 		
			$submit = mysqli_query($conn,"insert into pengumuman (judul, tgl_post, fpgm) values ('$judul', '$tgl_post', '$path')");
				if($submit){
		            echo "<script>alert('Data berhasil ditambahkan')</script>";
		            echo "<script>location='pengumuman.php'</script>";
				} else {
		            echo "<script>alert('Data gagal ditambahkan')</script>";
		            echo "<script>location='pengumuman.php'</script>";	
				}
			}
		}
	}
};
	
?>
	
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Tambah Pengumuman</title>
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
							<li>
                                <a href="index.php"><span>Lowongan Pekerjaan</span></a>
                            </li>
							<li>
                                <a href="pelamar.php"></i><span>Data Pelamar</span></a>
                            </li>
							<li>
                                <a href="seleksi.php"></i><span>Hasil Seleksi</span></a>
                            </li>
 							<li  class="active">
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
									<h2>Tambah Pengumuman</h2>
								</div>
								<div class="formulir">
									<form action="tpengumuman.php" method="post" enctype="multipart/form-data" >
										<div class="form-group">
											<label>Judul</label>
											<input name="judul" type="text" class="form-control" placeholder="Judul" required>
										</div>
										<div class="form-group col-4">
		                                  <label>Upload File Pengumuman (PDF)</label>
		                                  <input type="file" name="file" class="form-control-file border"  accept="application/pdf" required>									
										</div>
										<input type="hidden" name="tgl_post" value="<?php echo date("Y-m-d H:i:s") ?>">
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