<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
$fullLink="";
if(isset($_POST['addPost']) && $_POST['addPost'] != ""){


        // FIRST Set Featured Photo if there's a Featured Photo
        if(isset($_POST['addImage']) && $_POST['addImage']== "true"){
            $targetDir = "../../images/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    
            if(!empty($_FILES["file"]["name"])){
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType, $allowTypes)){
                
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                
                $fullLink = "images/".$fileName;
                    
    
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
$post_language      = mysqli_real_escape_string($connection, $_POST['post_language']);


        
if($_POST['post_status'] == 'active'){
    $post_status = 1;
}else{
    $post_status = 0;
}

if($display_order != ''){
    $q=mysqli_query($connection,"SELECT * FROM blog_posts
                                 WHERE 
                                 blog_posts.display_order = '$display_order'");
if(mysqli_num_rows($q)>0){
    $q=mysqli_query($connection,"SELECT MAX(display_order)+1 FROM blog_posts");
    $last_display_order = mysqli_fetch_row($q);
    $display_order = $last_display_order[0];
    $response_status.="<span style='color:red'>Display Order Already Exist, Post Pushed To Last</span><br>";
}
    }else{$response_status.="<span style='color:red'>Display Order Pushed To The Last !</span><br>";}


        
$insertQuery = "INSERT INTO blog_posts 
            VALUES(null,
                   '$post_category',
                   '$post_name',
                   '$display_order',
                   '$fullLink',
                   '$post_slug',
                   '$post_title',
                   '$post_meta',
                   '$post_description',
                    NOW(),
                   '$post_status',
                   '$post_language'
                        )";
                        $q=mysqli_query($connection,$insertQuery)or die(mysqli_error($connection));
                 if($q){
                    $response_status.="<span style='color:green;'> Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
}

?>