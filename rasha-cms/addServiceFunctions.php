<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
$imageLink ="";
if(isset($_POST['addService']) && $_POST['addService'] == 'true'){


    
          // FIRST Add Banner Photo if there's a banner Photo
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
            }

            $display_order      = mysqli_real_escape_string($connection, $_POST['display_order']);
            $en_service_name      = mysqli_real_escape_string($connection, $_POST['en_service_name']);
            $ar_service_name      = mysqli_real_escape_string($connection, $_POST['ar_service_name']);
            $service_icon      = mysqli_real_escape_string($connection, $_POST['service_icon']);
            $en_description      = mysqli_real_escape_string($connection, $_POST['en_description']);
            $ar_description      = mysqli_real_escape_string($connection, $_POST['ar_description']);

            // cehcking if display order already exist
        if($display_order != ''){
        $q=mysqli_query($connection,"SELECT * FROM services
                                     WHERE 
                                     services.display_order = '$display_order'");
    if(mysqli_num_rows($q)>0){
        $q=mysqli_query($connection,"SELECT MAX(display_order)+1 FROM services");
        $last_display_order = mysqli_fetch_row($q);
        $display_order = $last_display_order[0];
        $response_status.="<span style='color:red'>Display Order Already Exist, Service Pushed To Last</span><br>";
    }
        }else{$response_status.="<span style='color:red'>Display Order Pushed To The Last !</span><br>";}


        if($_POST['service_status'] == 'active'){
            $service_status = 1;
        }else{
            $service_status = 0;
        }


        $insertQuery = "INSERT INTO services
                 VALUES(null,
               '$en_service_name',
               '$ar_service_name',
               '$service_icon',
               '$imageLink',
               '$display_order',
               '$en_description',
               '$ar_description',
               '$service_status'
               )";
               $q=mysqli_query($connection,$insertQuery)or die(mysqli_error($connection));
               if($q){
                   $response_status .="<span style='color:green;'>Data Updated </span><br>";
               }else{$response_status .="<span style='color:red;'>Something Went Wrong,Data Not Inserted </span>";}
            echo $response_status;
          

}


?>