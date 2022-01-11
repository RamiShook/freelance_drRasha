<?php
require_once('config.php');
require_once('functions.php');
if(isset($_GET['post'])){
	$post_id = $_GET['post'];
	$q=mysqli_query($connection,"SELECT `description`,
	MONTH(create_date) AS month_number,
	DAY(create_date) AS day_number,
	YEAR(create_date) AS year_number,
	title,
	featured_photo,
    ar_name as cat_name,
    post_id,
    meta_description
	FROM blog_posts
        INNER join blog_category 
        on blog_posts.category_id = blog_category.blog_cat_id
	WHERE post_id = $post_id");
			if(mysqli_num_rows($q)>0){
			$PostData = mysqli_fetch_row($q);	
			}else{
			echo 'Post Not Found';
			}
}else{
	echo "Post Not Found!";
	header( "refresh:1;url=index.php" );
}
?>
<!DOCTYPE html>
<html dir="rtl"  lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل">
    <meta name="keywords" content=" ">
    <meta name="description" content="<?php echo $PostData[8]?>">
    <title>الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل</title>
    <?php
        include('headerScripts.php');
    ?>
</head>
<body>
<?php 
include('header.php');
?>

    <div class="page-header">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-caption">
                            <!-- slider-captions -->
                            <h1 class="page-title"><?php echo $PostData[4]?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-breadcrumb">
            <!-- page-breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">الصفحة الرئيسية </a></li>
                            <li ><a href="blog-listing.php"> المدونة </a></li>
                            <li class="active"><?php echo $PostData[4]; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-holder mb40">
                                <div class="post-img mb30">
                                    <img src="<?php echo$PostData[5] ?>" alt="" class="img-responsive">
                                    <div class="sticky-box">
                                        <div class="post-sticky">
                                            <i class="fa fa-thumb-tack"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-header">
                                    <div class="meta"><span class="meta-date"><?php echo getArMonthName($PostData[1]); echo " ".$PostData[2]; echo', '.$PostData[3]?> </span>
								
									<span class="meta-category"><a href="#" class="title"><?php echo $PostData[6]?></a></span>
									</div>
                                    <h1><?php echo $PostData[4]; ?></h1></div>

                                        <p><?php echo $PostData[0]; ?>  </p>
                                </div>

                   
             
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <!-- sidebar-area -->
                        <div class="row">
                            
                     
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="widget widget-recent-post">
                                    <h2 class="widget-title">آخر المنشورات</h2>
                                    <div class="row">
<?php
 $q=mysqli_query($connection,"SELECT *,
                              MONTHNAME(create_date) AS month_name,
							  DAY(create_date) AS day_number,
                              MONTH(create_date) AS month_number,
                              YEAR(create_date) AS year_number
							  FROM blog_posts
							  WHERE is_active =1
							  ORDER BY create_date 
							  DESC LIMIT 3");

while($post = mysqli_fetch_assoc($q)){
echo '
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb40">
<div class="recent-block">
    <div class="recent-img mb20">
        <a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="imghover"><img src="'.$post['featured_photo'].'" class="img-responsive" alt=""></a>
    </div>
    <div class="meta"><span class="meta-date">'.getArMonthName($post['month_number']).' '.$post['day_number'].' '.$post['year_number'].' </span>
    </div>
    <div class="recent-content">
        <!-- recent block -->
        <h3 class="recent-title"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="title">'.$post['title'].'</a></h3>
    </div>
    <!-- /.recent block -->
</div>
</div>
';

}
                                        ?>

                                   
                                    </div>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                    <!-- /.sidebar-area -->
                </div>
            </div>
        </div>
    </div>
   <?php 
   include('footer.php');
   ?>
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slider.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>
</html>
