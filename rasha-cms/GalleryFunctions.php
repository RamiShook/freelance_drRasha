<?php
include('config.php');
require('./AdminAuthCheck.php');

    
      if(isset($_POST['addImage']) && $_POST['addImage']== "true"){

        $targetDir = "../images/";
        $fileName = basename($_FILES["file"]["name"]);
        
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

      

        if(!empty($_FILES["file"]["name"])){
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){
            
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            $imageLink = "images/".$fileName;

                }else{ $response_status.="<span style='color:red'>1 Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>2 Something Went Wrong With The Image !<br></span>";}
        }else{$response_status.="<span style='color:red'>3 Something Went Wrong With The Image !</span><br>";}
        
        
        
        $q=mysqli_query($connection,"SELECT MAX(display_order)+1 FROM gallery");
        $last_display_order = mysqli_fetch_row($q);
        $display_order = $last_display_order[0];



$q=mysqli_query($connection,"INSERT INTO gallery
                                VALUES(null,
                                    '$display_order',
                                    '$imageLink',
                                    1
                                )");

        }





if(isset($_POST['change_status']) && isset($_POST['image_id'])){
    echo"posted";
    $status = $_POST['change_status'];
        $image_id = $_POST['image_id'];
        $q=mysqli_query($connection, "UPDATE gallery SET is_active='$status'
                                        WHERE photo_id = '$image_id'");



}
?>