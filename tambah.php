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
            <h3><strong><font color="green">FORM INPUT DATA KARYAWAN LAUNDRY</font></strong></h3></td>
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
   <body>
        <form method="POST" action="simpan.php">
            <table>
                <tr><td>NIK</td><td><input type="text" name="nik"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td><input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
                <tr><td>DIVISI</td><td>
                        <select name="divisi">
                            <option value="">PILIH DIVISI</option>
                            <option value="KASIR">KASIR</option>
                            <option value="KEUANGAN">KEUANGAN</option>
                            <option value="KURIR">KURIR</option>
                            <option value="PENCUCIAN">PENCUCIAN</option>
                        </select>
                    </td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>AGAMA</td><td>
                        <select name="agama">
                            <option value="">PILIH AGAMA</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="WAISAK">WAISAK</option>
                        </select>
                    </td></tr>
                <tr><td>STATUS</td><td>
                        <select name="status">
                            <option value="">PILIH STATUS</option>
                            <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            <option value="MENIKAH">MENIKAH</option>
                        </select>
                </td></tr>
                <tr><td>NO_TELEPON</td><td><input type="text" name="no_tlp"></td></tr>
                <tr><td>Foto</td><td><input type="file" name="foto"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan.php">SIMPAN</button></td></tr>
            </table>
        </form>
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
    