<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
$imageLink ="";
if(isset($_POST['addBanner']) && $_POST['addBanner'] == 'true'){


    
          // FIRST Add Banner Photo if there's a banner Photo
          if(isset($_POST['addImage']) && $_POST['addImage']== "true"){
            $targetDir = "../../images/";
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
            }

            $display_order            = mysqli_real_escape_string($connection, $_POST['display_order']);
            $en_banner_title          = mysqli_real_escape_string($connection, $_POST['en_banner_title']);
            $ar_banner_title          = mysqli_real_escape_string($connection, $_POST['ar_banner_title']);
            $en_banner_description    = mysqli_real_escape_string($connection, $_POST['en_banner_description']);
            $ar_banner_description    = mysqli_real_escape_string($connection, $_POST['ar_banner_description']);
            $en_button_label          = mysqli_real_escape_string($connection, $_POST['en_button_label']);
            $ar_button_label          = mysqli_real_escape_string($connection, $_POST['ar_button_label']);
            $button_link              = mysqli_real_escape_string($connection, $_POST['button_link']);
            $ar_button_link           = mysqli_real_escape_string($connection, $_POST['ar_button_link']);

            // cehcking if display order already exist
        if($display_order != ''){
        $q=mysqli_query($connection,"SELECT * FROM banner
                                     WHERE 
                                     banner.display_order = '$display_order'");
    if(mysqli_num_rows($q)>0){
        $q=mysqli_query($connection,"SELECT MAX(display_order)+1 FROM banner");
        $last_display_order = mysqli_fetch_row($q);
        $display_order = $last_display_order[0];
        $response_status.="<span style='color:red'>Display Order Already Exist, Banner Pushed To Last</span><br>";
    }
        }else{$response_status.="<span style='color:red'>Display Order Pushed To The Last !</span><br>";}


        if($_POST['banner_status'] == 'active'){
            $banner_status = 1;
        }else{
            $banner_status = 0;
        }

        // $arr = array( $en_banner_title,
        // $en_banner_description,
        // $imageLink,
        // $button_link,
        // $en_button_label,
        // $display_order,
        // null,
        // $banner_status,
        // $ar_banner_title,
        // $ar_banner_description,
        // $ar_button_label);
        // print_r($arr);

        $insertQuery = "INSERT INTO banner
                 VALUES(null,
               '$en_banner_title',
               '$en_banner_description',
               '$imageLink',
               '$button_link',
               '$en_button_label',
               '$display_order',
               null,
               '$banner_status',
               '$ar_banner_title',
               '$ar_banner_description',
               '$ar_button_label',
               '$ar_button_link'
               )";
               $q=mysqli_query($connection,$insertQuery);
               if($q){
                   $response_status .="<span style='color:green;'>Data Updated </span><br>";
               }else{$response_status .="<span style='color:red;'>Something Went Wrong,Data Not Inserted </span>";}
            echo $response_status;
          

}


?>