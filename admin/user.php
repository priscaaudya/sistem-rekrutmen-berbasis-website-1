<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date_now = date("Y-m-d");
	include '../koneksi.php';

/*    if (!isset($_SESSION['level'])){
	  $_SESSION['level'] = "SUPER"; 
	 akhir
	<?php
    } else { ?>
    <script type="text/javascript">
        alert("Halaman ini hanya bisa diakses oleh Admin");
        window.location = "index.php";
    </script>
    <?php

    }
    ?> */
	
	if (isset($_POST["submit"])) {
        $user=$_POST['username'];
        $pass=$_POST['password'];
        
				$submit = mysqli_query($conn,"insert into user (username, password) values ('$user', '$pass')");
				if($submit){
					echo "<meta http-equiv='refresh' content='1; URL=user.php'> Updating";
				} else {
					echo "<meta http-equiv='refresh' content='1; URL=user.php'> Failed";	
				}
/*			if($level=="ADMIN"){ 
			
			  	$query = "insert into user values('','$user','$pass','$level)";
			  	$sql = mysqli_query($conn, $query); 
			  
			  	if($sql){ 
				
					echo "<br><meta http-equiv='refresh' content='5; URL=user.php'> You will be redirected to the form in 5 seconds";
					
			  	}else{
				// Jika Gagal, Lakukan :
					echo "Sorry, there's a problem while submitting.";
					echo "<br><meta http-equiv='refresh' content='5; URL=user.php'> You will be redirected to the form in 5 seconds";
			  	}

		} */
	};
	
	
												
												

	
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manajemen Data Pengguna</title>
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
                                <a href="seleksi.php"><span>Seleksi</span></a>
                            </li>
 							<li>
                                <a href="pengumuman.php"><span>Pengumuman</span></a>
                            </li>
							<li class="active">
								<a href="user.php"><span>Data Pengguna</span></a>
							</li>                            
                            <li>
                                <a href="../logout.php"><span>Keluar</span></a>
                                
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
                            <li><h3><div class="date">
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
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Data pengguna</h2>
                                    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Pengguna Baru</button>
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>                                             
                                                <th>Action</th>

												
												<!--<th>Opsi</th>-->
											</tr></thead><tbody>
											<?php 
											$job=mysqli_query($conn,"SELECT * from user where id >= 1 order by id ASC");
											$no=1;
											while($p=mysqli_fetch_array($job)){
		                                            $iduser = $p['id'];
                                                    $user = $p['username'];
                                                    $pass = $p['password'];                                             
                                                    ?>

                                                <tr>

													<form action="user.php" method="post" enctype="multipart/form-data" >
                   	 									<input type="hidden" name="idu" value="<?php echo $iduser ?>">
		                                                    <td><?php echo $no++ ?></td>
		                                                    <td><?php echo $user ?></td>
		                                                    <td><?php echo $pass ?></td>
		                                                    <td>														
																<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
																  Aksi
																</button>
																<div class="dropdown-menu">
																  <input type="button" class="dropdown-item" data-toggle="modal" data-target="#edit<?php echo $iduser ?>" value="Edit" \>
																  <input type="submit" class="dropdown-item" name="hapus1" value="Delete" \>
																</div>
															</td>
													</form>
												</tr>

											<!-- modal input -->
														<div id="edit<?php echo $iduser ?>" class="modal fade">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title">Edit Pengguna</h4>
																	</div>
																	<div class="modal-body">
																		<form action="user.php" method="post" enctype="multipart/form-data" >
																			<div class="form-group">
																				<label>Username</label>
																				<input name="edituser" type="text" class="form-control" value="<?php echo $p['username'] ?>" required>
																			</div>
																			<div class="form-group">
																				<label>Password</label>
																				<input name="editpass" type="text" class="form-control" value="<?php echo $p['password'] ?>" required>
																			</div>
																			<div>
												                                <input type="hidden" name="idu" value="<?php echo $iduser ?>">
												                            </div>
																		</div class="form-group">
																		<div class="modal-footer">
																			<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
																			<input type="submit" name="simpan2" class="btn btn-primary" value="Simpan">
																		</div>
																	</form>
																</div>
															</div>
														</div>

												
											<?php 
											}
											
											if(isset($_POST["hapus1"])){
												    $idu = $_POST['idu'];
													$hapusin = mysqli_query($conn,"delete from user where id='$idu'");
													if($hapusin){
														echo "<br><meta http-equiv='refresh' content='1; URL=user.php'> Deleting";
													} else {
														echo "<br><meta http-equiv='refresh' content='1; URL=user.php'> Failed";	
													}
												};
												
											if(isset($_POST["simpan2"])){
												$idu = $_POST['idu'];
												$edituser = $_POST['edituser'];
												$editpass = $_POST['editpass'];
													$simpanin = mysqli_query($conn,"update user set username='$edituser', password='$editpass' where id='$idu'");
													if($simpanin){
														echo "<meta http-equiv='refresh' content='1; URL=user.php'> Updating";
													} else {
														echo "<meta http-equiv='refresh' content='1; URL=user.php'> Failed";	
													}
												};
											?>
										</tbody>
										</table>
                                    </div>
									<!--
									<a href="exportstkbhn.php" target="_blank" class="btn btn-info">Export Data</a>
									-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
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
	
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Pengguna Baru</h4>
						</div>
						<div class="modal-body">
							<form action="user.php" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label>Username</label>
									<input name="username" type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input name="password" type="text" class="form-control" placeholder="Password" required>
								</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
									<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
								</div>
							</form>
						</div>
					</div>
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
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
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
