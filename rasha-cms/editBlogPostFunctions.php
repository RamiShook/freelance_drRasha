<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
if(isset($_POST['updatePost']) && $_POST['updatePost'] != ""){

$post_id =mysqli_real_escape_string($connection, $_POST['post_id']);

        // FIRST UPDATE Featured Photo if there's a Featured Photo
        if(isset($_POST['updateImage']) && $_POST['updateImage']== "true"){
            $targetDir = "../images/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    
            if(!empty($_FILES["file"]["name"])){
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType, $allowTypes)){
                
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                
                $fullLink = "images/".$fileName;
                        $q= mysqli_query($connection,"
                                            UPDATE blog_posts
                                            SET featured_photo = '$fullLink'
                                            WHERE post_id = '$post_id'")or die(mysqli_error($connection));
    
                    }else{ $response_status.="<span style='color:red'>1Something Went Wrong With The Image !<br></span>";}
                }else{$response_status.="<span style='color:red'>2Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>3Something Went Wrong With The Image !</span><br>";}
        }

$display_order      = mysqli_real_escape_string($connection, $_POST['display_order']);
$post_name      = mysqli_real_escape_string($connection, $_POST['post_name']);
$post_title      = mysqli_real_escape_string($connection, $_POST['post_title']);
$post_description      = mysqli_real_escape_string($connection, $_POST['post_description']);
$post_category      = mysqli_real_escape_string($connection, $_POST['post_category']);
$post_meta      = mysqli_real_escape_string($connection, $_POST['meta_description']);
$post_slug      = mysqli_real_escape_string($connection, $_POST['slug']);
$meta_title      = mysqli_real_escape_string($connection, $_POST['meta_title']);



if($_POST['post_status'] == 'active'){
    $post_status = 1;
}else{
    $post_status = 0;
}

// check if thee display order changed 
        // if change than  change the display order to MAX(display_order +1 )
        if($display_order != $_POST['inital_display_order']){
            $q=mysqli_query($connection,"SELECT MAX(display_order)+1 from blog_posts");
                $lastDisplayOrder  = mysqli_fetch_row($q);
                $display_order = $lastDisplayOrder[0];
                $response_status.="<span style='color:red'>Display Order Changed By System To : ".$display_order."<br></span>";
        }
        
$q=mysqli_query($connection,"UPDATE blog_posts SET
                            `category_id` = '$post_category',
                            `name`='$post_name',
                            `title`= '$post_title',
                            `description`='$post_description',
                            `is_active`='$post_status',
                            `meta_description`='$post_meta',
                            `slug`='$post_slug',
                            `display_order`= '$display_order',
                            `meta_title`= '$meta_title'
                            WHERE 
                            post_id = '$post_id'
                            ");
                 if($q){
                    $response_status.="<span style='color:green;'> Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
}

?>