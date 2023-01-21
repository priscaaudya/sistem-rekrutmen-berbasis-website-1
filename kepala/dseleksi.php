<?php 
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date_now = date("Y-m-d");
	include '../koneksi.php';
    if($_SESSION['log']!="Loggedd"){
        header("location:../login.php");
    }
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Detail Data Pelamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/foto/logooo.png">
    <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../admin/assets/css/slicknav.min.css">
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
    <link rel="stylesheet" href="../admin/assets/css/typography.css">
    <link rel="stylesheet" href="../admin/assets/css/default-css.css">
    <link rel="stylesheet" href="../admin/assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/fontawesome/css/all.css">
    <!-- modernizr css -->
    <script src="../admin/assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                                <a href="index.php"><span>Data Pelamar</span></a>
                            </li>                         
                            <li class="active">
                                <a href="seleksi.php"></i><span>Hasil Seleksi</span></a>
                            </li> 
                            <li>
                                <a href="akun.php" ><span>Ubah Password</span></a>
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
                                $getid = $_GET['id_pelamar'];
                                $pelamar=mysqli_query($conn,"SELECT * from pendaftaran p, lowongan l where p.idjob=l.id and id_pelamar=$getid");
                                while($p=mysqli_fetch_array($pelamar)){
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
                                    ?>
                                <div align="center">
                                    <h2>Detail Data Pelamar</h2>
                                </div>
                                <div class="formulir">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <a type="text" class="form-control" disabled><?php echo $nama ?></a>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Posisi</label>
                                        <a type="text" class="form-control" disabled><?php echo $posisi ?></a>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <a type="text" class="form-control" disabled><?php echo $pend ?>" </a>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <a type="date" class="form-control" disabled><?php echo $dob ?>" </a>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <a type="text" class="form-control" disabled><?php echo $jk ?>" </a>
                                    </div>                                                      
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <a type="text" class="form-control" disabled><?php echo $adr ?>" </a>
                                    </div>
                                    <div class="form-group">
                                        <label>No.Telepon</label>
                                        <a type="text" class="form-control" disabled><?php echo $nohp ?>" </a>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <a type="text" class="form-control" disabled><?php echo $email ?>" </a>
                                    </div>
                                    <div class="form-group">
                                        <label>Informasi Tambahan</label>
                                        <a type="text" class="form-control" disabled><?php echo $info ?></a>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal submit</label>
                                        <a type="datetime" class="form-control" disabled><?php echo $submit ?></a>
                                    </div>
                                    <div class="form-group"><br>
                                        <a href="../<?php echo $cv?>">Download File</a>
                                    </div>
                                    <div class="form-group pull-right">
                                        <input type="submit" data-toggle="modal" data-target="#syarat<?php echo $id;?>" class="btn btn-success" value="Ubah Seleksi Syarat">
                                    </div>                                  
                                </div>

                            <!-- modal input -->
                            <div id="syarat<?php echo $id;?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Ubah Seleksi Syarat</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="dseleksi.php" method="post" enctype="multipart/form-data" >
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="namas" value="<?php echo $nama ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Posisi</label>
                                                    <input type="text" class="form-control" name="posisi1" value="<?php echo $posisi ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Persyaratan</label>
                                                        <select name="syarat" required>
                                                          <option  value="" disabled selected hidden>  Pilih </option>
                                                          <option value="1">Memenuhi Persyaratan</option>
                                                          <option value="0">Tidak Memenuhi Persyaratan</option>
                                                        </select>       
                                                </div>
                                                <input type="hidden" name="ids" value="<?php echo $id ?>" \>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                <input type="submit" name="simpan" class="btn btn-success" value="Simpan">
                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            if(isset($_POST["simpan"])){
                            $ids = $_POST['ids'];
                            $syarat = $_POST['syarat'];
                            $simpanin = mysqli_query($conn,"update seleksi set syarat='$syarat' where id_pelamar='$ids'");
                                if($simpanin){
                                    mysqli_query($conn,"update pendaftaran set aksi='1' where id_pelamar='$ids'");
                                    echo "<script>alert('Berhasil ditambahkan')</script>";
                                    echo "<script>location='seleksi.php'</script>";
                                } else {
                                    echo "<script>alert('Gagal ditambahkan')</script>";
                                    echo "<script>location='seleksi.php'</script>";
                                }
                            };                          
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
    <script src="../admin/assets/js/popper.min.js"></script>
    <script src="../admin/assets/js/bootstrap.min.js"></script>
    <script src="../admin/assets/js/owl.carousel.min.js"></script>
    <script src="../admin/assets/js/metisMenu.min.js"></script>
    <script src="../admin/assets/js/jquery.slimscroll.min.js"></script>
    <script src="../admin/assets/js/jquery.slicknav.min.js"></script>
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
    <script src="../admin/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../admin/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../admin/assets/js/plugins.js"></script>
    <script src="../admin/assets/js/scripts.js"></script>


    
</body>

</html>
