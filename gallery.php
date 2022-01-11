<!DOCTYPE html>
<html dir="rtl"  lang="ar">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="الدكتورة رشا الشمري | اختصاص جراحة نسائية، توليد عقم و رعايــة حوامل">
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

<div class="page-header" style="background:linear-gradient(rgba(125, 36, 70, 0.5), rgba(125, 36, 70, 0.5)), rgba(125, 36, 70, 0.5) url(<?php getBanner(5,'photo');?>) no-repeat center"> 
  <!-- page-header -->
  <div class="container">
    <div class="page-section">
      <div class="row"> 
        <!-- page section -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="page-caption"> 
            <!-- slider-captions -->
            <h1 class="page-title"><?php getBanner(5,'ar_heading') ?></h1>
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
            <li class="active">معرض الصور</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="space-medium">
  <div class="container">
    <div class="row isotope">
      <?php
      $q=mysqli_query($connection,"SELECT * FROM gallery
                                    WHERE is_active =1
                                      ORDER BY display_order");
          while($photo = mysqli_fetch_assoc($q)){
            echo'
            <div class="col-md-4 col-sm-4 gallery-masonry col-xs-12">
            <div class="gallery-thumbnail mb30">
              <div class="img"> <a href="gallery.php?#" class="imghover"><img src="'.$photo['photo_path'].'" alt="" class="img-responsive"></a> </div>
            </div>
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
<script src="js/menumaker.js"></script> 
<!-- sticky header --> 
<script type="text/javascript" src="js/jquery.sticky.js"></script> 
<script type="text/javascript" src="js/sticky-header.js"></script> 
<!-- filter gallery --> 
<script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="js/filter-script.js"></script> 
<script src="js/isotope.pkgd.min.js"></script> 
<script>
    // external js: isotope.pkgd.js

    $(function() {

        $('.isotope').isotope({
            itemSelector: '.gallery-masonry',
            masonry: {}
        });

    });
    </script> 
<!-- Back to top script --> 
<script src="js/back-to-top.js" type="text/javascript"></script>
</body>


</html>
