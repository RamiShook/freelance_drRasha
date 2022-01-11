<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
// Updating the banner
if(isset($_POST['updateBanner']) && $_POST['updateBanner'] != ""){
    $banner_id =mysqli_real_escape_string($connection, $_POST['banner_id']);

        // FIRST UPDATE Banner Photo if there's a banner Photo
        if(isset($_POST['updateImage']) && $_POST['updateImage']== "true"){
        $targetDir = "../images/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


        if(isset($_POST["file"]) && !empty($_FILES["file"]["name"])){
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){
            
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            $fullLink = "images/".$fileName;
                    $q= mysqli_query($connection,"
                                        UPDATE banner
                                        SET photo = '$fullLink'
                                        WHERE banner_id = '$banner_id'");

                }else{ $response_status.="<span style='color:red'>Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>Something Went Wrong With The Image !<br></span>";}
        }else{$response_status.="<span style='color:red'>Something Went Wrong With The Image !</span><br>";}
        }


        $display_order            = mysqli_real_escape_string($connection, $_POST['display_order']);
        $en_banner_title          = mysqli_real_escape_string($connection, $_POST['en_banner_title']);
        $ar_banner_title          = mysqli_real_escape_string($connection, $_POST['ar_banner_title']);
        $en_banner_description    = mysqli_real_escape_string($connection, $_POST['en_banner_descriptions']);
        $ar_banner_description    = mysqli_real_escape_string($connection, $_POST['ar_banner_descriptions']);
        $en_button_label          = mysqli_real_escape_string($connection, $_POST['en_button_label']);
        $ar_button_label          = mysqli_real_escape_string($connection, $_POST['ar_button_label']);
        $button_link              = mysqli_real_escape_string($connection, $_POST['button_link']);
        $ar_button_link           = mysqli_real_escape_string($connection, $_POST['ar_button_link']);
        
if($_POST['banner_status'] == 'active'){
    $banner_status = 1;
}else{
    $banner_status = 0;
}
// check if thee display order changed 
        // if change than  change the display order to MAX(display_order +1 )
if($display_order != $_POST['inital_display_order']){
    $q=mysqli_query($connection,"SELECT MAX(display_order)+1 from banner");
        $lastDisplayOrder  = mysqli_fetch_row($q);
        $display_order = $lastDisplayOrder[0];
        $response_status.="<span style='color:red'>Display Order Changed By System To : ".$display_order."<br></span>";
}

    $q=mysqli_query($connection,"UPDATE banner SET 
                                `heading` = '$en_banner_title',
                                `description` = '$en_banner_description',
                                `cta_link` = '$button_link',
                                `button_lable` = '$en_button_label',   
                                `display_order` = '$display_order',
                                `is_active` = '$banner_status',
                                `ar_heading` = '$ar_banner_title',
                                `ar_description`=  '$ar_banner_description',
                                `ar_button_lable` = '$ar_button_label',
                                `ar_cta_link` = '$ar_button_link'
                                WHERE 
                                banner_id = '$banner_id'
                                    ")or die(mysqli_error($connection));
        if($q){
            $response_status.="<span style='color:green;'> Data Updated </span>";
        }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}

echo $response_status;
    }
    
?>