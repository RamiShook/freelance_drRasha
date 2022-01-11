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
    <div class="page-header" style="background:linear-gradient(rgba(125, 36, 70, 0.5), rgba(125, 36, 70, 0.5)), rgba(125, 36, 70, 0.5) url(<?php getBanner(7,'photo');?>) no-repeat center">
        <!-- page-header -->
        <div class="container">
            <div class="page-section">
                <div class="row">
                    <!-- page section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-caption">
                            <!-- slider-captions -->
                            <h1 class="page-title"><?php getBanner(7,'ar_heading');?></h1>
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
                            <li class="active">اتصل بنا</li>
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
                    <h1>نحن نقدم رعاية كاملة لأمراض النساء</h1>
                    
                    <p class="mb30">اذا كانت لديك أي أسئلة تتعلق بخيارات العلاج أو تعاني من مشكلة ، فاتصل بنا عن طريق ملء الاستمارة أو الاتصال بنا على<strong>‏‪<a href="tel:‏‪07716158154">07716158154</a></strong> </p>
                    <div class="contact-form">
                        <h2>يرجى ملء النموذج أدناه وسيقوم فريقنا بالاتصال بك</h2>
                        <form action="" id="message_form" name="message_form" onsubmit="return false;">
                            <div class="row">
                                <!-- Textarea -->
                                <div class="col-md-6">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="fname">الاسم</label>
                                        <input id="patient_name" name="patient_name" type="text" class="form-control" placeholder=" " required>
                                    </div>
                                </div>
                              
                            
                                <!-- Text input
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="phone">رقم الجوال </label>
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="" required>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="control-label" for="textarea" >الرسالة</label>
                                        <textarea class="form-control" id="textarea" name="message" id="message" rows="6" placeholder=" " required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Button -->
                                    <div class="form-group">
                                        <button  class="btn btn-primary"  onclick="SendFromMessage()">إرسال</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <!-- sidebar-area -->
                        <div class="widget widget-address">
                            <div class="contact-icon">
                                <i class="icon-map"></i>
                            </div>
<?php getLang(5);?>
                        </div>
                        <div class="widget widget-phone">
                            <div class="contact-icon">
                                <i class="icon-phone-reciever"></i>
                            </div>
<?php getLang(6);?>
                        </div>

                        <div class="widget-hours mb30">
                            <h3 class="widget-title">ساعات العمل</h3>
                            <?php getLang(4);?>
                        </div>
                   
                    </div>
                    <!-- /.sidebar-area -->
                </div>
            </div>
        </div>
    </div>
    <div class="map" style="position: relative; overflow: hidden;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.261588268796!2d44.379102215197115!3d33.36423608079869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDIxJzUxLjMiTiA0NMKwMjInNTIuNyJF!5e0!3m2!1sen!2slb!4v1626260099186!5m2!1sen!2slb" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


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
   
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>

    <script language="javascript">
function SendFromMessage(){
   const form = document.getElementById('message_form');
   // preparing message
   let name = form.patient_name.value;
    let patient_message = form.message.value;
   let message = " -الأسم:";
   message +="%0a";
   message +=name;
   message +="%0a";


   message +=" -الرسالة:";
   message +="%0a";
   message +=patient_message;
   
   window.location.replace("https://wa.me/9647716158154?text="+message);

   

}
         </script>
</body>



</html>
