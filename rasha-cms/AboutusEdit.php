<?php
require_once('./config.php');
require('./AdminAuthCheck.php');

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>About-us Edit</title>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />   
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <style>
       td textarea {
   resize:vertical;
   columns: 80;
}
   </style>
   <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php
        require('header.php');
   ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
         <?php
         include('menu.php');
            ?>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     About-us Edit
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">CMS </a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           About-us EDit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php
            
            $q=mysqli_query($connection,"SELECT * FROM about_us");
            if(mysqli_num_rows($q)>0){
                $aboutus = mysqli_fetch_row($q);		 
                
            }else{
                echo'<div style="color:red;" align="center"> <h1>aboutus Not Found</h1></div>';
                exit;
            }
        
            ?>


<form class="form-vertical" method="get" action="#" id="aboutus_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1">
    <tr>
<td>
            <div class="row-fluid">

                                    <div class="control-group">
                                    <label class="control-label">En Page</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" 
                                        name="en_body"
                                        rows="20"
                                        id="en_body" >
                                      <?php echo $aboutus[1]?>
                                        </textarea>
                                    </div>
                                </div>
</td>
</tr>
<tr>
<td>
            <div class="row-fluid">

                                    <div class="control-group">
                                    <label class="control-label">ar Page</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" 
                                        name="ar_body"
                                        rows="20"
                                        id="ar_body" >
                                      <?php echo $aboutus[2]?>
                                        </textarea>
                                    </div>
                                </div>
</td>
</tr>
<tr>
<td colspan=2>
 <input type="button" value="Update Data" class="btn btn-success" onclick="updateData()"></input>  &nbsp; &nbsp; 
 <input type="button" value="reset" class="btn"  onclick="location.reload()"></input>
</td>

</tr>

    </table>
    <input type="hidden"
           value="<?php echo $aboutus[0];?>"
           id="aboutus_id"
           name="aboutus_id"> </input>

        </form>


            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
<?php
        include('footer.php');
?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!-- <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script> -->
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <!-- <script src="assets/chart-master/Chart.js"></script> -->
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
<!--  -->
   <!-- <script src="js/easy-pie-chart.js"></script> -->
   <!-- <script src="js/sparkline-chart.js"></script> -->
   <!-- <script src="js/home-page-calender.js"></script> -->
   <!-- <script src="js/home-chartjs.js"></script> -->
<!--  -->
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
<script>
      // update section body&title
function updateData() {
    const form = document.getElementById('aboutus_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    data.append('updateAboutus','true');
    data.append('en_description',CKEDITOR.instances.en_body.getData());
    data.append('ar_description',CKEDITOR.instances.ar_body.getData());


    fetch('./editAboutusFunctions.php', {
        mode: 'same-origin', 
        credentials: 'include',
        
        method: 'POST',
    
        body: data
    }).then(response => {
        if (!response.ok) {
        throw new Error('Network error!');
        }else{
        return response.text();
        }
    }).then(responseText =>
    document.getElementById("result").innerHTML= responseText)
    .catch(console.error)
}
</script>
</html>