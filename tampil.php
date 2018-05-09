<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Laundry Maestro Web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/slider-pro.css">
        <link rel="stylesheet" href="assets/css/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="index.php">
                                            <h2>LAUNDRY</h2>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="home.php">Home</a></li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                            aria-haspopup="true">Input Data Karyawan</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="tambah.php">Input Data Karyawan</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                            aria-haspopup="true">Tampil Data Karyawan</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="tampil.php">Tampil Data Karyawan</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                            aria-haspopup="true">Logout</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>    
                                    
                                </div>
                            </nav>
                        </div>  
                    </div>

                </div>

            </div>
        </header> <!--End of header -->
            
    <section id="home" class="home">
            
    <body>
    <br><br><br><br><br><br><br><center>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="green">
        <tr>
            <td height="80" align="center" bgcolor="pink"><strong></strong>
            <h3><strong><font color="green">FORM TAMPIL DATA KARYAWAN LAUNDRY</font></strong></h3></td>
        </tr>
        <tr>
            <td bgcolor="white"><table width="800" border="0" align="left" cellpadding="6" cellspacing="0">
                <tr>
                    <td width="200"></td>
                    <td width="20"></td>
                    <td width="250"></td>
                </tr>
            </td>
        </tr>
 </table>
  <table border="1" width="100%">
   <tr>
  <td width="2%" bgcolor="#CCCCCC">Nik</td>
  <td width="7%" bgcolor="#CCCCCC">Nama Lengkap</td>
  <td width="6%" bgcolor="#CCCCCC">Jenis Kelamin</td>
  <td width="5%" bgcolor="#CCCCCC">Divisi</td>
  <td width="8%" bgcolor="#CCCCCC">Alamat</td>
  <td width="8%" bgcolor="#CCCCCC">Agama</td>
  <td width="8%" bgcolor="#CCCCCC">Status</td>
  <td width="8%" bgcolor="#CCCCCC">No Telepon</td>
  <td width="8%" bgcolor="#CCCCCC">Foto</td>
  <td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
  </tr>
   <?php 
 // Load file koneksi.php  
   include "koneksi.php";  
   

$query = "SELECT * FROM tb_karyawan";  
$sql = mysqli_query($koneksi, $query);    
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>"; 
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama']."</td>";  
  echo "<td>".$data['jenis_kelamin']."</td>";
  echo "<td>".$data['divisi']."</td>";
  echo "<td>".$data['alamat']."</td>";
  echo "<td>".$data['agama']."</td>";
  echo "<td>".$data['status']."</td>";
  echo "<td>".$data['no_tlp']."</td>"; 
  echo "<td><img src='../images/".$data['foto']."'width='100' height='100'></td>";           
  echo "<td><a href='edit.php?nik=".$data['nik']."'>Ubah</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}  
  ?> 
</table>
</br></br></br></br></br></br></br></center>
</body>                        
                           
    </section><!-- End of Home Section -->

                    

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/masonry/masonry.min.js"></script>
        <script type="text/javascript">
            $('.mixcontent').masonry();
        </script>

        <script src="assets/js/jquery.sliderPro.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#example3').sliderPro({
                    width: 960,
                    height: 200,
                    fade: true,
                    arrows: false,
                    buttons: true,
                    fullScreen: false,
                    shuffle: true,
                    smallSize: 500,
                    mediumSize: 1000,
                    largeSize: 3000,
                    thumbnailArrows: true,
                    autoplay: false,
                    thumbnailsContainerSize: 960

                });
            });
        </script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
    