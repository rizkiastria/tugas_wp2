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
                                            <center><h2>LAUNDRY</h2></center>
                                        </a>
                                    </div>

                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->
            
<section id="home" class="home">
            
                            <div class="single_home_slider">
                                <div class="home-overlay"></div>
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <?php
    if(isset($_GET["Login_error"])){
        echo "<h2 style='color:blue';> Username atau password salah </h2>";
        }

?>

<center><h1 style='color:blue'>Form Login Admin</h1></center>  

<div class="main-w3">
   <form action="proses_login.php" method="post">
    <center><h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2></center>
     <div class="login-w3ls">
         <center><div class="icons"></center>
             
             <center><input type="email" name="email" placeholder="Email" required=""></center>
             <center><span class="fa fa-user" aria-hidden="true"></span></center>
          <div class="clear"></div> 
        </div>         
         <div class="icons">
                
                <center><input type="password" name="password" placeholder="Password" required=""></center>
                <center><span class="fa fa-key" aria-hidden="true"></span></center>
                 <div class="clear"></div>
        </div>
         <div class="btnn">
              <center><button type="submit">Login</button></center><br>
              <center><a href="#" class="for" >Forgot password...?</a></center>  
        </div>  
     </div>
   </form>

 </div> 

    <div class="copy">
    <p></a>
</div>
                            <div class="separator"></div>
                                    <p class="subtitle"><br />
                                    </p>
                                    <img src="assets/images/.jpg" alt="" />
                                </div>
                            </div><!-- End of single_home_slider -->
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
