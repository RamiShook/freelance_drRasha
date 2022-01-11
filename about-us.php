<!DOCTYPE html>
<html dir="rtl"  lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل">
    <meta name="keywords" content=" ">
    <title>الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل</title>
    <!-- Bootstrap -->
    <?php
        include('headerScripts.php');
    ?>
</head>

<body>
<?php
include('header.php');
?>
    <div class="page-header" style="background:linear-gradient(rgba(125, 36, 70, 0.5), rgba(125, 36, 70, 0.5)), rgba(125, 36, 70, 0.5) url(<?php getBanner(2,'photo');?>) no-repeat center">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-caption">
                            <!-- slider-captions -->
                            <h1 class="page-title"><?php getBanner(2,'ar_heading') ?></h1>
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
                            <li class="active">نبذة</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-medium bg-white">
    <?php getLang(2);?>
    </div>
    <div class="space-medium">
        <?php getLang(3);?>
    </div>
    <div class="cta-img" style="background:linear-gradient(rgba(72, 145, 163, 0.7), rgba(72, 145, 136, 0.7)), rgba(72, 145, 163, 0.7) url(<?php getBanner(3,'photo') ?>) no-repeat center">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="cta-content">
                        <h1 class="text-white mb40"><?php getBanner(3,'ar_heading') ?></h1>
                        <a href="<?php getBanner(3,'ar_cta_link') ?>" class="btn btn-default"><?php getBanner(3,'ar_button_lable') ?></a></div>
                </div>  
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
    <!-- video modal box -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/mv08yjqZkGc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>



</html>
