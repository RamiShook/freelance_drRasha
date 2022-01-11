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
   <title>Lang Edit</title>
         <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
      <!-- themify -->
      <link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

   <script>
       	// CKEDITOR.config.startupMode = 'source';
           CKEDITOR.config.allowedContent = true;

  
       </script>


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
                     lang Edit
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
                           lang Edit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php
            $lang_id =mysqli_real_escape_string($connection,  $_GET['lang_id']);
            
            $q=mysqli_query($connection,"SELECT * FROM lang WHERE lang_id = '$lang_id'");
            if(mysqli_num_rows($q)>0){
                $lang = mysqli_fetch_row($q);		 
                
            }else{
                echo'<div style="color:red;" align="center"> <h1>lang Not Found</h1></div>';
                exit;
            }
        
            ?>


<form class="form-vertical" method="get" action="#" id="lang_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1">
<tr>
    <td colspan=2>
                                <div class="control-group">
                                    <label class="control-label">Lang Name</label>
                                    <div class="controls">
                                        <input type="text"
                                               placeholder="Lang Name"
                                               class="input-xxlarge"
                                               name="lang_name"
                                               id="lang_name"
                                               
                                               value="<?php echo $lang[1];?>"
                                               >
                                    </div>
                                </div>

    </td>
</tr>

<tr >
<?php


if($lang[5] == 0){ // normal text

echo '
<td>
<div class="row-fluid">
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label" >En Value</label>
                                <div class="controls controls-row">
                                            <textarea class="input-xlarge" rows="3"   style="width:100%"
                                            placeholder="En Value" 
                                            name="en_value"
                                            
                                            id="en_value">'.$lang[2].'</textarea>
                                </div>
                           </div>
                        </div>
</td>
<td>
                        <div class="span6">
                            <div class="control-group">
                                    <label class="control-label" >Ar Value</label>
                                <div class="controls controls-row" >
                                            <textarea  class="input-xlarge" rows="3" style="width:100%"
                                             placeholder="Ar Value"
                                             name="ar_value"
                                             id="ar_value">'.$lang[3].'</textarea>
                                </div>
                            </div>
                        </div>
                            </div>

                           
</div>
</td>


';
    
}else{  // if its html USE CKeditor

    echo '
    
    <td>
    <div class="row-fluid">

                            <div class="control-group">
                            <label class="control-label">En Value</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor" 
                                name="en_value"
                                rows="20"
                                id="en_value" >
                              '.htmlspecialchars($lang[2]).'
                                </textarea>
                            </div>
                        </div>
    </td>
    <td>
    <div class="row-fluid">

                            <div class="control-group">
                            <label class="control-label">ar Value</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor" 
                                name="ar_value"
                                rows="20"
                                id="ar_value" >
                              '.htmlspecialchars($lang[3]).'
                                </textarea>
                            </div>
                        </div>
    </td>

    ';
    

}


?>

</tr>

<tr>
<td colspan=2>
 <input type="button" value="Update Data" class="btn btn-success" onclick="updateData()"></input>  &nbsp; &nbsp; 
 <input type="reset" value="reset" class="btn"></input>
</td>

</tr>

    </table>
    <input type="hidden"
           value="<?php echo $lang[0];?>"
           id="lang_id"
           name="lang_id"> </input>


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
    const form = document.getElementById('lang_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    data.append('updateLang','true');
    data.append('lang_en_value',CKEDITOR.instances.en_value.getData());
    data.append('lang_ar_value',CKEDITOR.instances.ar_value.getData());
    // if user select file to upload
    
    fetch('./editLangFunctions.php', {
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