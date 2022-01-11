<!DOCTYPE html>
<html dir="rtl"  lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل">
    <meta name="keywords" content=" ">
    <title>الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل</title>
    <?php
        include('headerScripts.php');
    ?>

    <style>
.page-itempage-itempage-itempage-item: {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
  z-index: 2;
  color: #ea85b2;
  background-color: transparent;
  border-color: #ea85b2;
}

.justify-content-center{
    justify-content: center !important;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}



        </style>
</head>
<body>
<?php
        include('header.php');
    ?>
    <div class="page-header" style="background:linear-gradient(rgba(125, 36, 70, 0.5), rgba(125, 36, 70, 0.5)), rgba(125, 36, 70, 0.5) url(<?php getBanner(6,'photo');?>) no-repeat center">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-caption">
                            <!-- slider-captions -->
                            <h1 class="page-title"> <?php getBanner(6,'ar_heading') ?></h1>
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
                            <li><a href="index.php">الصفحة الرئيسية</a></li>
                            <li class="active">المدونة</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-listing-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <?php
                     $per_page_record = 3;  // Number of entries to show in a page.   
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
                                        YEAR(create_date) AS year_number,
                                        ar_name as cat_name
										FROM blog_posts
                                        INNER join blog_category 
                                        on blog_posts.category_id = blog_category.blog_cat_id
                                        WHERE blog_posts.is_active =1
										ORDER BY create_date DESC
										LIMIT $start_from, $per_page_record");

while($post = mysqli_fetch_assoc($q)){

    

echo'
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="post-holder mb40">
    <div class="post-img mb30">
        <a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="imghover"><img src="'.$post['featured_photo'].'" alt="" class="img-responsive"></a>
        <div class="sticky-box">
            <div class="post-sticky">
                <i class="fa fa-thumb-tack"></i>
            </div>
        </div>
    </div>
    <div class="post-header">
        <div class="meta"><span class="meta-date">'.getArMonthName($post['month_number']).' '.$post['day_number'].' '.$post['year_number'].' </span>
        
        <span class="meta-category"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="title">'.$post['cat_name'].'</a></span>
        </div>
        <h1><a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="title">'.$post['title'].'</a></h1></div>
    <p>'.substr($post['description'],0,243).'[…] </p>
    <a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="btn btn-default">اقرأ أكثر</a>
</div>
</div>
';


}
                    ?>
                    
                     


                    <div class="post-navigation">
                                <!-- post navigation -->
                                <div class="container">



         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            

<ul class="pagination justify-content-center">

			


                                            
                <?php
$countQuery =mysqli_query($connection,"SELECT COUNT(*) from blog_posts WHERE is_active =1");
$result = mysqli_fetch_row($countQuery);     
$total_pages = ceil($result[0] / $per_page_record);     


for ($i=1; $i<=$total_pages; $i++) {   
	if ($i == $page) {   
		echo '
		<li class="page-item active"><a class="page-link" href="blog-listing.php?page='.$i.'">'.$i.'</a></li>

		';
 
	}               
	else  {   
		
		echo '
		<li class="page-item"><a class="page-link" href="blog-listing.php?page='.$i.'">'.$i.'</a></li>

		';
	}   
  };  

?>
                              </div>      
                                </div>
                            </div>
                  
                   

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <!-- sidebar-area -->


       
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
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
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
                        
                    <!-- /.sidebar-area -->
                </div>
            </div>
        </div>
    </div>
    <?php
include('footer.php');
?>
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