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
         <!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">دليل الأختبارات</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="الرئيسية" href="index.php">الرئيسية</a>
                                </span>
                                <span>الأختبارات</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">
        <?php
                                         if(isset($_GET['service_id'])){
                                            $requestedServiceId = $_GET['service_id'];
                                     }else{
                                            $requestedServiceId = 1;
                                     }
        ?>

        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <?php
                                if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
                                    // get the arabic banner data
                                    $q=mysqli_query($connection,"SELECT
                                    service_id,
                                    ar_name
                                    FROM services
                                    WHERE is_active =1
                                    ORDER BY display_order ")or die(mysqli_error($connection));
                                 }else{
                                    $q=mysqli_query($connection,"SELECT 
                                    service_id,
                                    en_name
                                    FROM services
                                    WHERE is_active =1
                                    ORDER BY display_order
                                    ");
                                 }

              while($service=mysqli_fetch_array($q)){
                  if($requestedServiceId == $service[0]){
                      echo'
                      <li class="active"><a href="service-single.php?service_id='.$service[0].'">'.$service[1].'</a></li>
                      ';
                  }else{
                    echo '
                    <li><a href="service-single.php?service_id='.$service[0].'">'.$service[1].'</a></li>

                    ';
                    }
            }
   
                                
                                ?>
                               
                            </ul>
                        </aside>
                        <aside class="widget widget-download">
                            <ul class="download">
                                <li><i class="fa fa-file-pdf-o"></i><div><h4>Our Brouchers</h4><a href="#">تحميل</a></div></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-contact p-0">
                            <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-one ttm-col-bgimage-yes ttm-bg pt-20 pl-20 pr-20 pb-20">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey pt-1 pb-1 pl-1 pr-1">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>

                                        <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg pt-50 pl-30 pr-30 pb-40">
                                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                            </div>
                                            <div class="layer-content">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg mb-15">
                                                    <i class="flaticon-pigment"></i>
                                                </div>
                                                <?php
                                                getLang(21);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        
                    </div>
                    <?php
                         $q=mysqli_query($connection,"SELECT photo,full_description 
                         FROM services
                         WHERE service_id = $requestedServiceId");

                        $service_full_desc=mysqli_fetch_row($q);

   ?>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            
                            <div class="ttm-featured-wrapper mb-40 res-991-mb-20">
                                <img class="img-fluid" src="<?php echo $service_full_desc[0];?>" alt="">
                            </div>
                            <div class="ttm-service-description">
                               <?php
                               
                
                            echo $service_full_desc[1];
                               ?>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>

      
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