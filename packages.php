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
                                <h2 class="title">باقات</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                           
                                <span>باقات</span>
                                <span>
                                    <a title="الصفحة الرئيسية" href="index.php">الرئيسية</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

            <!--pricing-title-section-->
            <section class="ttm-row pricing-title-section ttm-bgcolor-grey clearfix">
               <div class="container">
                  <!-- row -->
                  <div class="row">
                     <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                          <?php 
                          getLang(20);
                          ?>
                        </div>
                        <!-- section-title end -->
                     </div>
                  </div>
                  <!-- row end -->
               </div>
            </section>
            <!--pricing-title-section end-->
<!--pricing-plan-section-->
<section class="ttm-row pricing-plan-section mt_100 res-991-mt-0 clearfix">
               <div class="container">
                  <div class="row">
                      <?php 


if(isset($_SESSION['language']) && $_SESSION['language']=="en"){
    // get the arabic banner data
    $q=mysqli_query($connection,"SELECT
    package_id,
    package_en_name,
    package_price,
    en_button_label,
    button_link
    FROM package_item
    WHERE is_active =1
    ORDER BY display_order DESC")or die(mysqli_error($connection));
 }else{
    $q=mysqli_query($connection,"SELECT
    package_id,
    package_ar_name,
    package_price,
    ar_button_label,
    button_link
    FROM package_item
    WHERE is_active =1
    ORDER BY display_order DESC")or die(mysqli_error($connection));
 }

 while($package = mysqli_fetch_array($q)){
     echo '
     <div class="col-md-4">
     <!--ttm-pricing-plan-->
     <div class="ttm-pricing-plan">
        <div class="ttm-p_table-head">
           <div class="ttm-p_table-title">
              <h3>'.$package[1].'</h3>
           </div>
           <div class="ttm-p_table-desc">*الأسعار قابلة للتغيير</div>
        </div>
        <div class="ttm-p_table-body">
           <div class="ttm-p_table-amount">
            '.$package[2].'
           </div>
           <ul class="ttm-p_table-features">
           ';
           $package_id = $package[0];
           $q1=mysqli_query($connection,"SELECT * FROM package_item_details 
                                        where package_id='$package_id'")or die(mysqli_error($connection));
            while($package_details = mysqli_fetch_array($q1)){
                echo '
                <li>'.$package_details[2].'</li>
                ';
            }
          
             echo'
           </ul>
        </div>
        <div class="ttm-p_table-footer">
           <a class="ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor" href="'.$package[4].'">'.$package[3].'</a>
        </div>
     </div>
     <!--ttm-pricing-plan-->
  </div>
     
     ';
 }


                      ?>
                    
                     
                  </div>
               </div>        </section>
        <!--pricing-plan-section end-->

      
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