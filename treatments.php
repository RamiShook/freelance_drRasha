
<!DOCTYPE html>
<html dir="rtl" lang="ar">

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
<?php
if(isset($_GET['service'])){
    $service_id = $_GET['service'];
    $q=mysqli_query($connection,"SELECT * FROM services
                                 WHERE service_id = '$service_id'");
 			if(mysqli_num_rows($q)>0){
                $ServiceData = mysqli_fetch_row($q);	
                }else{
                            // header( "refresh:1;url=treatments.php" );
                            $ServiceData[7] = "<p class= 'lead'> 
                            لقد حسنت علاجات العقم عند النساء بشكل كبير من فرص الأمومة لملايين من النساء. يمكن أن تشمل عوامل ومسببات العقم عند النساء أسبابا مثل نقص التغذية، أو الاختلال الهرموني، أو الأمراض، أو العمليات الطبية السابقة والكثير من المشاكل.
                            <br> 
و بالرغم من محاولات الحمل لسنوات، فقد تقدم علاجات العقم مثل أطفال الأنابيب والتلقيح داخل الرحم أملاً جديدا وطريقة جديدة لتحقيق الحمل.
تعمل عيادتنا دائما على تطوير تقنيات جديدة لمساعدة الأزواج الذين يعانون من العقم من خلال الأستشارات الطبية اتي تقدمها الدكتورة رشا لتحقيق حلم الأبوة لجميع مرضانا.
 </p>
                            ";
                // exit();

                }
}else{
    // header( "refresh:1;url=treatments.php" );
    $ServiceData[7] = "<p class= 'lead'> 
    لقد حسنت علاجات العقم عند النساء بشكل كبير من فرص الأمومة لملايين من النساء. يمكن أن تشمل عوامل ومسببات العقم عند النساء أسبابا مثل نقص التغذية، أو الاختلال الهرموني، أو الأمراض، أو العمليات الطبية السابقة والكثير من المشاكل.
    <br> 
و بالرغم من محاولات الحمل لسنوات، فقد تقدم علاجات العقم مثل أطفال الأنابيب والتلقيح داخل الرحم أملاً جديدا وطريقة جديدة لتحقيق الحمل.
تعمل عيادتنا دائما على تطوير تقنيات جديدة لمساعدة الأزواج الذين يعانون من العقم من خلال الأستشارات الطبية اتي تقدمها الدكتورة رشا لتحقيق حلم الأبوة لجميع مرضانا.
 </p>
    ";
}


                             

?>
<body>
    <?php
        include('header.php');
    ?>
    <div class="page-header"
        style="background:linear-gradient(rgba(125, 36, 70, 0.5), rgba(125, 36, 70, 0.5)), rgba(125, 36, 70, 0.5) url(<?php getBanner(2,'photo');?>) no-repeat center">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-caption">
                            <!-- slider-captions -->
                            <h1 class="page-title">
                                <?php getBanner(2,'ar_heading') ?>
                            </h1>
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
                            <li class="active">العلاجات</li>
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
<?php
echo $ServiceData[7];
?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <!-- sidebar-area -->
                        <div class="sidenav">
                            <ul class="listnone">
                            <?php
                $q=mysqli_query($connection,"SELECT * FROM services
                ORDER BY display_order");
                if(isset($_GET['service']) && $_GET['service'] !=""){
                    $GET_SERVICE_ID = $_GET['service'];
                }else{
                    $GET_SERVICE_ID = 0;
                }
            while($service = mysqli_fetch_assoc($q)){
                if($service['service_id']==$GET_SERVICE_ID){
                    echo'
                    <li class="active"><a href="treatments/'.$service['slug'].'service='.$service['service_id'].'">'.$service['ar_name'].'</a></li>
                    ';
                }else{
                    echo '
                    <li><a href="treatments/service='.$service['service_id'].'">'.$service['ar_name'].'</a></li>
    
                    ';
                }

            }
            ?>

                            </ul>
                        </div>
                        <div class="widget widget-appointment">
                            <h2>احجز موعدك الان</h2>

                            <a href="contact-us.php" class="btn btn-primary">إحجز موعد</a>
                        </div>
                        <div class="widget-hours mb30">
                            <h3 class="widget-title">ساعات العمل</h3>
                            <?php getLang(4);?>
                        </div>
                        <div class="widget-imgfaq">
                            <div class="imgfaq-content">
                                <h1 class="text-white imgfaq-title">لا تتردد</h1>
                                <h3 class="text-white">إذا كان لديك أي سؤال</h3>
                                <a href="contact-us.php" class="btn btn-primary">تواصل معنا</a>
                            </div>
                        </div>
                    </div>
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