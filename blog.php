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
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
      rel="stylesheet"
    />
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

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">مقالات</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                
                                <span>مقالات</span>
                                <span>
                                    <a title="الرئيسية" href="index.php">الرئيسية</a>
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
                <div class="row multi-columns-row ttm-boxes-spacing-15px">
                <?php
				 $per_page_record = 4;  // Number of entries to show in a page.   
				 // Look for a GET variable page if not found default is 1.        
				 if (isset($_GET["page"])) {    
					 $page  = $_GET["page"];    
				 }    
				 else {    
				   $page=1;    
				 }    
			 
				 $start_from = ($page-1) * $per_page_record;     
			$q=mysqli_query($connection,"SELECT *,
										MONTHNAME(create_date) AS month_name,
										DAY(create_date) AS day_number,
                                        MONTH(create_date) AS month_number,
                                        YEAR(create_date) AS year_number
										FROM blog_posts
										WHERE is_active =1
										ORDER BY create_date
										LIMIT $start_from, $per_page_record");

while($post = mysqli_fetch_assoc($q)){


switch ($post['month_number']) {
    case '1':
        $ar_month_name = 'يناير';
        break;
        case '2':
            $ar_month_name = 'فبرابر';
            break;
            case '3':
                $ar_month_name = 'مارس';
                break;
                case '4':
                    $ar_month_name = 'ابريل';
                    break;
                    case '5':
                        $ar_month_name = 'مايو';
                        break;				
                        case '6':
                        $ar_month_name = 'يونيو';
                        break;
                    case '7':
                    $ar_month_name = 'بوليو';
                    break;
                case '8':
                $ar_month_name = 'اغسطس';
                break;
            case '9':
            $ar_month_name = 'سبتمبر';
            break;
        case '10':
        $ar_month_name = 'اكتوبر';
        break;
    case '11':
    $ar_month_name = 'نوفمر';
    break;
case '12':
$ar_month_name = 'ديسمبر';
break;
}

					echo ' 
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <a href="blog-single.php?post='.$post['post_id'].'">
                                <img class="img-fluid" src="'.$post['featured_photo'].'" alt="image"> 
                            </a>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i>'.$ar_month_name.' '.$post['day_number'].' '.$post['year_number'].'</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.php?post='.$post['post_id'].'">'.$post['title'].'.</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>'.substr($post['description'],0,243).'[…]</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-imagebox-post end-->
                    </div>
                    ';
} ?>
                    
                </div>
                <div class="pagination-block mb-40 res-991-mt-15">
                <?php
$countQuery =mysqli_query($connection,"SELECT COUNT(*) from blog_posts WHERE is_active =1");
$result = mysqli_fetch_row($countQuery);     
$total_pages = ceil($result[0] / $per_page_record);     


for ($i=1; $i<=$total_pages; $i++) {   
	if ($i == $page) {   
		echo '
        <a class="page-numbers current" href="blog.php?page='.$i.'">'.$i.'</a>

		';
 
	}               
	else  {   
		
		echo '
        <a class="page-numbers" href="blog.php?page='.$i.'">'.$i.'</a>

		';
	}   
  };  

?>
                </div>
            </div>
        </section>
        <!--grid-section end-->

      
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