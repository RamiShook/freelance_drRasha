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
   <title>Post Edit</title>
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
                     Post Edit
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
                           Post Edit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php
            $post_id =mysqli_real_escape_string($connection,  $_GET['post_id']);
            
            $q=mysqli_query($connection,"SELECT * FROM blog_posts WHERE post_id = '$post_id'");
            if(mysqli_num_rows($q)>0){
                $post = mysqli_fetch_row($q);		 
                
            }else{
                echo'<div style="color:red;" align="center"> <h1>Post Not Found</h1></div>';
                exit;
            }
        
            ?>


<form class="form-vertical" method="get" action="#" id="post_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1" align="center">
<tr>
<td>
                                <div class="control-group">
                                    <label class="control-label">Display Order</label>
                                    <div class="controls">
                                        <input type="number" placeholder="" class="input-mini"
                                                value="<?php echo $post[3];?>"
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
                                        <input type="text" placeholder="" class="input-xxlarge"
                                                value="<?php echo $post[2];?>"
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
                                        <input type="text" placeholder="" class="input-xxlarge"
                                                value="<?php echo $post[6];?>"
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
                                        <?php echo $post[8];?>
                                        </textarea>
                                    </div>
                                </div>
</td>

</tr>
<tr>
<td>
                                <div class="control-group">
                                    <label class="control-label">Create Date</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xxlarge"
                                        disabled
                                                value="<?php echo $post[9];?>"
                                                name="create_date"
                                                id="create_date">
                                        
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
                                            <?php
                                            if($post[10]==1){
                                                echo '
                                                <option value="active" name="active" selected>Active</option>
                                                <option value="Unactive" name="Unactive">Unactive</option>
                                                ';
                                            }else{
                                                echo '
                                                <option value="active" name="active">Active</option>
                                                <option value="unactive" name="unactive" selected>Unactive</option>
                                                ';
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
                                                        id="meta_description">
                                                        <?php echo $post[7];?>
                                                    </textarea>
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
                                            <label class="control-label">Post Meta Title</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-block-level" rows="3"
                                                        style='resize:vertical;' 
                                                        placeholder="Meta Title"
                                                        name="meta_title"
                                                        id="meta_title">
                                                        <?php echo $post[12];?>
                                                    </textarea>
                                            </div>
                                       </div>
                                    </div>
        </td>
</tr>
<tr>
<td  align="center">
Featured Image <br>
<img src="../<?php echo $post[4];?>" alt="Image Cannot Viewed Or No Featured Image For This Post"></img>
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
                                                value="<?php echo $post[5];?>"
                                                name="slug"
                                                id="slug">
                                    </div>
                                </div>
</td>
</tr>

<tr>
<td>
<input type="button" value="Update Data" class="btn btn-success" onclick="updateData()"></input>  &nbsp; &nbsp; 
 <input type="button" value="reset" class="btn"  onclick="location.reload()"></input>
</td>


</tr>
    
<input type="hidden"
           value="<?php echo $post[0];?>"
           id="post_id"
           name="post_id"> </input>

           <input type="hidden"
           value="<?php echo $post[3];?>"
           id="inital_display_order"
           name="inital_display_order"> </input>



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
      // update section body&title
function updateData() {
    const form = document.getElementById('post_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    data.append('post_description',CKEDITOR.instances.post_description.getData());
    data.append('updatePost','true');
    // if user select file to upload
    if(input.files[0] != null) {
    data.append('file',input.files[0]);
    data.append('updateImage','true');
    }else{
        data.append('updateImage','false');

    }

    fetch('./editBlogPostFunctions.php', {
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