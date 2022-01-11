<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
if(isset($_POST['updateService']) && $_POST['updateService'] != ""){

$service_id =mysqli_real_escape_string($connection, $_POST['service_id']);

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
                                            UPDATE services
                                            SET photo = '$fullLink'
                                            WHERE service_id = '$service_id'")or die(mysqli_error($connection));
    
                    }else{ $response_status.="<span style='color:red'>1Something Went Wrong With The Image !<br></span>";}
                }else{$response_status.="<span style='color:red'>2Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>3Something Went Wrong With The Image !</span><br>";}
        }

$display_order        = mysqli_real_escape_string($connection, $_POST['display_order']);
$en_service_name      = mysqli_real_escape_string($connection, $_POST['en_service_name']);
$ar_service_name      = mysqli_real_escape_string($connection, $_POST['ar_service_name']);
$service_icon         = mysqli_real_escape_string($connection, $_POST['service_icon']);
$en_description       = mysqli_real_escape_string($connection, $_POST['en_description']);
$ar_description       = mysqli_real_escape_string($connection, $_POST['ar_description']);
$description_brief    = mysqli_real_escape_string($connection, $_POST['description_brief']);
$meta_title      = mysqli_real_escape_string($connection, $_POST['meta_title']);
$meta_description      = mysqli_real_escape_string($connection, $_POST['meta_description']);


        
if($_POST['service_status'] == 'active'){
    $service_status = 1;
}else{
    $service_status = 0;
}

// check if thee display order changed 
        // if change than  change the display order to MAX(display_order +1 )
        if($display_order != $_POST['inital_display_order']){
            $q=mysqli_query($connection,"SELECT MAX(display_order)+1 from services");
                $lastDisplayOrder  = mysqli_fetch_row($q);
                $display_order = $lastDisplayOrder[0];
                $response_status.="<span style='color:red'>Display Order Changed By System To : ".$display_order."<br></span>";
        }
        
$q=mysqli_query($connection,"UPDATE services SET
                            `en_name` = '$en_service_name',
                            `ar_name`='$ar_service_name',
                            `icon`= '$service_icon',
                            `display_order`='$display_order',
                            `en_description`='$en_description',
                            `ar_description`='$ar_description',
                            `is_active`='$service_status',
                            `brief_description` ='$description_brief',
                            `meta_description` = '$meta_description',
                            `meta_title` = '$meta_title'
                            WHERE 
                            service_id = '$service_id'
                            ")or die(mysqli_error($connection));
                 if($q){
                    $response_status.="<span style='color:green;'> Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
}

?>