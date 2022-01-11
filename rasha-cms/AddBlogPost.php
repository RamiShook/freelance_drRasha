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
   <title>Add Post</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

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
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Banner Edit
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
                           Banner Edit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->



<form class="form-vertical" method="get" action="#" id="post_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1" align="center">
<tr>
<td>
                                <div class="control-group">
                                    <label class="control-label">Display Order</label>
                                    <div class="controls">
                                        <input type="number" placeholder="" class="input-mini"
                                                value=""
                                                name="display_order"
                                                id="display_order">
                                        <span class="help-inline">(Display Order Must Be Unique, if you put an order that already exist than system will automatically set after the last one)</span>
                                    </div>
                                </div>
</td>
</tr>
<tr>
<td>

                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Name" class="input-xxlarge"
                                                
                                                name="post_name"
                                                id="post_name">
                                    </div>
                                </div>
</td>

</tr>

<tr>
<td>

                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Title" class="input-xxlarge"
                                                
                                                name="post_title"
                                                id="post_title">
                                        
                                    </div>
                                </div>
</td>
</tr>
<tr>
<td>
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" 
                                        name="editor1"
                                        rows="20"
                                        id="post_description" >
                                      
                                        </textarea>
                                    </div>
                                </div>
</td>

</tr>

<tr>
<td>
<div class="control-group">
                                    <label class="control-label">Post Status</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1"
                                                name="post_status"
                                                id="post_status">
                                            
                                                <option value="active" name="active" selected>Active</option>
                                                <option value="Unactive" name="Unactive">Unactive</option>
                                            
                                        </select>
                                    </div>
                                </div>


</div>
</td>

</tr>

<tr>
<td>
<div class="control-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1"
                                                name="post_category"
                                                id="post_category">
            <?php 
                $q=mysqli_query($connection,"SELECT * FROM blog_category");

                while($categories = mysqli_fetch_assoc($q)){
                    if($categories['blog_cat_id'] == $post[1]){
                        echo '
                        <option value="'.$categories['blog_cat_id'].'" selected>'.$categories['name'].'</option>
                        ';
                    }else{
                        echo '
                        <option value="'.$categories['blog_cat_id'].'">'.$categories['name'].'</option>
                        ';
                    }
                }
            ?>
                                        
                                        </select>
                                    </div>
                                </div>


</div>
</td>

</tr>
<tr>
<td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">Post Meta Description</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-block-level" rows="3"
                                                        style='resize:vertical;' 
                                                        placeholder="Meta Description"
                                                        name="meta_description"
                                                        id="meta_description"></textarea>
                                            </div>
                                       </div>
                                    </div>
        </td>
</tr>
<tr>
<td  align="center">
Featured Image <br>
<img src="<?php echo $post[4];?>" alt="Image Cannot Viewed Or No Image For This Banner"></img>
<br>
<div class="control-group">
                                    <label class="control-label">Upload Image</label>
                                    <div class="controls">
                                        <input type="file" class="default"
                                                name="featured_image"
                                                id="featured_image">
                                    </div>
                                </div>

</td>
</tr>
<tr>
<td>

                                <div class="control-group">
                                    <label class="control-label">slug</label>
                                    <div class="controls">
                                        <input type="text" placeholder="slug" class="input-xxlarge"
                                                
                                                name="slug"
                                                id="slug">
                                    </div>
                                </div>
</td>
</tr>
<tr>
<td>
<div class="control-group">
                                    <label class="control-label">Post Language</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1"
                                                name="post_language"
                                                id="post_language">
                                            
                                                <option value="en" name="en" selected>English</option>
                                                <option value="ar" name="ar">Arabic</option>
                                            
                                        </select>
                                    </div>
                                </div>


</div>
</td>

</tr>

<tr>
<td>
<input type="button" value="Update Data" class="btn btn-success" onclick="AddData()"></input>  &nbsp; &nbsp; 
 <input type="button" value="reset" class="btn"  onclick="location.reload()"></input>
</td>


</tr>
    
   



    </table>
   
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
    
function AddData() {
    const form = document.getElementById('post_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    data.append('post_description',CKEDITOR.instances.post_description.getData());
    data.append('addPost','true');
    // if user select file to upload
    if(input.files[0] != null) {
    data.append('file',input.files[0]);
    data.append('addImage','true');
    }else{
        data.append('addImage','false');

    }

    fetch('./addBlogPostFunctions.php', {
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