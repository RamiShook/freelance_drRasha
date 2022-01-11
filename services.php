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
      <?php

include('headerScripts.php');
?>
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
         </header>
         <!--header end-->


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">الخدمات</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>الخدمات</span>
                                <span>
                                    <a title="الصفحة الرئيسية" href="index.php">الرئسية</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row multi-columns-row ttm-boxes-spacing-15px">

                <?php
	$q=mysqli_query($connection,"SELECT * FROM services
    ORDER BY display_order");
while($service = mysqli_fetch_assoc($q)){

    echo '
    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
    <!-- featured-imagebox -->
    <div class="featured-imagebox featured-imagebox-services">
        <!-- featured-thumbnail -->
        <div class="featured-thumbnail">
            <a href="service-single.php?service_id='.$service['service_id'].'"> <img class="img-fluid" src="'.$service['photo'].'" alt="image"></a>
        </div><!-- featured-thumbnail end-->
        <div class="featured-content">
            <div class="fea_con_left">
                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-grey ttm-icon_element-size-xs ttm-icon_element-style-round">
                    <i class="'.$service['icon'].'"></i>
                </div>
            </div>
            <div class="fea_con_right">
                <div class="featured-title">
                    <h5><a href="service-single.php?service_id='.$service['service_id'].'">'.$service['ar_name'].'</a></h5>
                </div>
                <div class="featured-desc">
                    <p>'.$service['ar_description'].'</p>
                </div>
            </div>
        </div>
    </div><!-- featured-imagebox -->
</div>
    ';
}
?>

                    
                </div><!-- row end -->
            </div>
        </section>
        <!--services-section end-->
      
    </div><!--site-main end-->


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