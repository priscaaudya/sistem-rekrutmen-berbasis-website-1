<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date_now = date("Y-m-d");
	include '../koneksi.php';
    if($_SESSION['level']!="admin"){    
    }
?>	
												
												



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ubah Password</title>
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
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

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
                                <a href="pelamar.php"><span>Data Pelamar</span></a>
                            </li>
							<li>
                                <a href="seleksi.php"><span>Hasil Seleksi</span></a>
                            </li>
 							<li>
                                <a href="pengumuman.php"><span>Pengumuman</span></a>
                            </li>
 							<li>
                                <a href="pesan.php"><span>Pesan</span></a>
                            </li>
							<li class="active">
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
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
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
									$job=mysqli_query($conn,"SELECT * from user where level='admin'");
									while($p=mysqli_fetch_array($job)){
                                            $iduser = $p['id'];
                                            $user = $p['username'];                                          
                                            ?>
									<div align="center">
										<h2>Ubah Password</h2>
									</div>
									<div class="user">
										<form action="akun.php" method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" class="form-control" value="<?php echo $user?>"disabled>
											</div>
											<div class="form-group">
												<label>Password Lama</label>
												<input name="password_lama" type="password" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Password Baru</label>
												<input name="password_baru" type="password" class="form-control"  required>
											</div>
											<div class="form-group">
												<label> Konfirmasi Password Baru</label>
												<input name="konfirmasi_password" type="password" class="form-control" required>
											</div>	
                                            <input type="hidden" name="idu" value="<?php echo $iduser ?>">                                            										
											<div class="form-group pull-right">
												<input type="submit" name="simpan" class="btn btn-success" value="Simpan">
											</div>
										</form>									
										</div>
									</div>
								</div>
								<?php
								}

    //proses jika tombol rubah di klik
    if(isset($_POST['simpan'])){
        //membuat variabel untuk menyimpan data inputan yang di isikan di form
        $idu = $_POST['idu'];
        $password_lama          = $_POST['password_lama'];
        $password_baru          = $_POST['password_baru'];
        $konfirmasi_password    = $_POST['konfirmasi_password'];
        
        $cek            = $conn->query("SELECT password FROM user WHERE password='$password_lama'");
        
        if($cek->num_rows){
            //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
            //membuat kondisi minimal password adalah 5 karakter
            if(strlen($password_baru) >= 5){
                //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
                //membuat kondisi jika password baru harus sama dengan konfirmasi password
                if($password_baru == $konfirmasi_password){
                    //jika semua kondisi sudah benar, maka melakukan update kedatabase
                    //query UPDATE SET password = encrypt md5 password_baru
                    //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
                    $password_baru  = $password_baru;
                    $update         = $conn->query("UPDATE user SET password='$password_baru' WHERE id='$idu'");
                    if($update){
                        //kondisi jika proses query UPDATE berhasil
                        echo "<script> alert('Password berhasil diubah')</script>";
                        echo "<script>location='index.php'</script>";
                    }else{
                        //kondisi jika proses query gagal
                        echo "<script> alert('Gagal merubah password')</script>";
                    }                   
                }else{
                    //kondisi jika password baru beda dengan konfirmasi password
                    echo "<script> alert('Konfirmasi password tidak cocok')</script>";
                }
            }else{
                //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
                echo "<script> alert('Minimal password baru adalah 5 karakter')</script>";
            }
        }else{
            //kondisi jika password lama tidak cocok dengan data yang ada di database
            echo "<script> alert('Password lama tidak cocok')</script>";
        }
    }
                                                        
							    /*proses ganti password
							    if (isset($_POST['simpan'])) {
							    $username        = $_POST['username'];
							    $password_lama    = $_POST['password_lama'];
							    $password_baru    = $_POST['password_baru'];
							    $konf_password    = $_POST['konf_password'];
							    //cek old password
							    $query = "SELECT * FROM user WHERE username='$username' AND password='$password_lama'";
							    $sql = mysql_query ($query);
							    $hasil = mysql_num_rows ($sql);
							    if (! $hasil >= 1) {
							        ?>
							            <script language="JavaScript">
							            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
							            document.location='akun.php';
							            </script>
							        <?php
							            unset($_SESSION['username']);
							            unset($_SESSION['hak_akses']);
							            session_destroy();
							    }
							    //validasi data data kosong
							    else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
							            echo "<script> alert ('Ganti Password Gagal! Data Tidak Boleh Kosong'); </script>";    
                                        echo "<script>location='akun.php'</script>";
							    }
							    //validasi input konfirm password
							    else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
							            echo "<script> alert ('Ganti Password Gagal! Password dan Konfirm Password Harus Sama'); </script>";    
                                        echo "<script>location='akun.php'</script>";
							    }
							    else {
							    //update data
							    $query = "UPDATE user SET password='$password_baru' WHERE username='$username'";
							    $sql = mysql_query ($query);
							    //setelah berhasil update
							    if ($sql) {
							        echo "<script> alert ('Ganti Password Berhasil!'); </script>";    
							    } else {
							        echo "<script> alert ('Ganti Password Gagal!'); </script>";    
							    }
							    }
							    } 	*/						
								?>
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
                <p>&copy; Prisca Audya 2021</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
	
	
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
	} );
	
	$(document).ready(function() {
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
