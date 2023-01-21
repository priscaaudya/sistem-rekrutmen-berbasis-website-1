<?php 
	session_start();
	include '../koneksi.php';
	if($_SESSION['log']!="Logged"){
		header("location:../login.php");
	}
	date_default_timezone_set("Asia/Bangkok");
?>
	
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Detail Pengumuman</title>
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
 							<li class="active">
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
								<?php 
  								$getid = $_GET['id'];
								$peng=mysqli_query($conn,"SELECT * from pengumuman where id >= 1 and id=$getid");
								while($p=mysqli_fetch_array($peng)){
                                        $idpg = $p['id'];
                                        $judul = $p['judul'];
                                        $fpgm = $p['fpgm'];
                                        $tglp = $p['tgl_post'];                                           
                                        ?>
								<div align="center">
									<h2>Detail Pengumuman</h2>
								</div>
								<div class="formulir">
									<div class="form-group">
										<label>Judul</label>
										<a type="text" class="form-control"><?php echo $judul ?> </a>
									</div>
									<div class="form-group">
										<label>Tanggal Posting</label>
										<a type="text" class="form-control"><?php echo $tglp ?> </a>
									</div>
									<div class="form-group"><br>
										<a href="<?php echo $fpgm?>">Download File</a>
									</div>										
								</div>
							</div>
							<?php
							}							
							?>
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