<?php
require_once('config.php');
require_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="Iskandaroni Laboratory" />
      <meta name="description" content="Health & Medical Laboratory" />
      <meta name="author" content="" />
      <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
      <title>Iskandaroni Laboratory</title>
      <!-- favicon icon -->
      <link rel="shortcut icon" href="images/favicon.png" />
      <!-- bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
      <!-- animate -->
      <link rel="stylesheet" type="text/css" href="css/animate.css"/>
      <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
      <!-- themify -->
      <link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
      <!-- slick -->
      <link rel="stylesheet" type="text/css" href="css/slick.css">
      <!-- REVOLUTION LAYERS STYLES -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
      <!-- prettyphoto -->
      <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
      <!-- shortcodes -->
      <link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>
      <!-- main -->
      <link rel="stylesheet" type="text/css" href="css/main.css"/>
      <!-- main -->
      <link rel="stylesheet" type="text/css" href="css/megamenu.css"/>
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
      <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"/>
   </head>
   <body>
      <!--page start-->
      <div class="page">
         <!-- preloader start -->
         <div id="preloader">
            <div id="status">&nbsp;</div>
         </div>
         <!-- preloader end --> 
         <!--header start-->
         <?php
                include('header.php');
         ?>
         <!--header end-->

        <section class="error-404 bg-img3">
            <div class="container">
                <div class="ttm-big-icon ttm-textcolor-skincolor">
                    <i class="fa fa-thumbs-o-down"></i>
                </div>
                <header class="page-header"><h1 class="page-title">404 ERROR</h1></header>
                <div class="page-content"> <p>This page may have been moved or deleted. Be sure to check your spelling.</p></div>
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark mb-15" href="index.html">Back To Home</a>
            </div>
        </section>


    <!--footer start-->
    <?php
    include('footer.php');
  ?>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->

</body>

</html>