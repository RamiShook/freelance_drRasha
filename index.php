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
</head>

<body>
    <?php
        include('header.php');
    ?>
    <div class="slider" style="direction:ltr">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
        <div class="item"> <img src="<?php getBanner(1,'photo') ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-6 col-lg-6 col-md-offset-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="slider-captions">
							<h1 class="slider-title"><?php getBanner(1,'ar_heading') ?></h1>
                                <h2 class="slider-title"><?php getBanner(1,'ar_description') ?></h2>
                                <ul class="listnone slider-points hidden-xs">
                                    
                                
                                </ul>
                                <a href="<?php getBanner(1,'ar_cta_link') ?>" class="btn btn-default hidden-xs"><?php getBanner(1,'ar_button_lable') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1>ماذا نعالج؟</h1>
                        <p>يعالج فريقنا جميع أمراض النساء باستخدام أحدث التقنيات.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $q=mysqli_query($connection,"SELECT * FROM services
                ORDER BY display_order");
            while($service = mysqli_fetch_assoc($q)){
                echo '
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="treatment-block mb30">
                    <!-- treatment block -->
                    <div class="treatment-img">
                        <!-- treatment img -->
                        <a href="treatments.php?service='.$service['service_id'].'" class="imghover"><img src="'.$service['photo'].'" class="img-responsive" alt=""></a>
                    </div>
                    <!-- /.treatment img -->
                    <div class="treatment-content">
                        <!-- treatment content -->
                        <h2><a href="treatments.php?service='.$service['service_id'].'">'.$service['ar_name'].'</a></h2>

                        <a href="treatments.php?service='.$service['service_id'].'" class="btn-link"> <ul>'.$service['brief_description'].' </ul></a>
                    </div>
                    <!-- /.treatment content -->
                </div>
                <!-- /.treatment block -->
            </div>
                ';
            }
            ?>
                
                

            </div>
        </div>
    </div>
    <div class="space-medium bg-primary">
<?php getLang(1);?>
    </div>

    <div class="space-medium bg-white">
        <?php getLang(7);?>
    </div>
    <div class="space-xs-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1>مواضيع تهمك</h1>
                        <p>يوفر هذا الموقع معلومات دقيقة وموثوقة ومحدثة وتثقيفًا حول الموضوعات المتعلقة بالحمل </p>
                    </div>
                </div>
            </div>
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
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="post-block">
                        <!-- post-block -->
                        <div class="post-img">
                            <a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="imghover"><img src="'.$post['featured_photo'].'" alt=""></a>
                        </div>
                        <div class="post-content">
                            <div class="meta"><span class="meta-date">'.getArMonthName($post['month_number']).' '.$post['day_number'].' '.$post['year_number'].' </span></div>
                            <h1><a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="post-title">'.$post['title'].'</a></h1>
                        </div>
                    </div>
                    <!-- post-block -->
                </div>
    ';
}
?>
                

                

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
