<!DOCTYPE html>
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

 <table width="700" border="0" align="left" cellpadding="0" cellspacing="2" bgcolor="green">
        <tr>
            <center><center><br><br><br><td height="80" align="center" bgcolor="pink"><strong></strong>
            <h3><strong><font color="green">FORM EDIT DATA KARYAWAN LAUNDRY</font></strong></h3></td></br></br></center></center>
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
  
  <?php 
  include "koneksi.php";
  $nik = $_GET['nik'];
  $query_mysql = mysqli_query($koneksi,"SELECT * FROM tb_karyawan WHERE nik='$nik'")or die(mysqli_error());
  $nomor = 1;
  while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form method="POST" action="proses_edit.php">   
      <table>
        <tr>
          <td>Nama</td>
          <td>
            <input type="hidden" name="nik" value="<?php echo $data['nik'] ?>">
            <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
          </td>         
        </tr> 
        <tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td><select type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"> 
          <option value="">PILIH GENDER</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option></td>          
        </tr></select>
        <tr>
        <td>Divisi</td>
        <td><select type="text" name="divisi" value="<?php echo $data['divisi'] ?>"> 
           <option value="">PILIH DIVISI</option>
          <option value="KASIR">KASIR</option>
          <option value="KURIR">KURIR</option>
          <option value="KEUANGAN">KEUANGAN</option>
          <option value="PENCUCIAN">PENCUCIAN</option>
        </select></td>          
      	</tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>          
        </tr>
        <tr>
        <td>Agama</td>
        <td><select type="text" name="agama" value="<?php echo $data['agama'] ?>">
           <option value="">PILIH AGAMA</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Waisak">Waisak</option>
        </select></td>          
      </tr>          
    	<tr>
          <td>Status</td>
          <td><select type="text" name="status" value="<?php echo $data['status'] ?>"> 
             <option value="">PILIH STATUS</option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
          </select>
          </td>          
        </tr>		
    <tr>
        <td>Nomor Telepone</td>
        <td><input type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>"></td></tr>
        <tr><td>Foto</td><td><input type="file" name="foto" value="<?php echo $data['foto'] ?>"></td></tr>          
    <tr>
      <td></td>
      <tr><td colspan="2"><button type="submit" value="proses_edit.php">SIMPAN</button></td></tr>        
    </tr>       
  </table>
</form>
<?php } ?>
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