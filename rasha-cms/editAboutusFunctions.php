<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
if(isset($_POST['updateAboutus']) && $_POST['updateAboutus'] == "true"){
$aboutus_id =mysqli_real_escape_string($connection, $_POST['aboutus_id']);
$en_body      = mysqli_real_escape_string($connection, $_POST['en_description']);
$ar_body      = mysqli_real_escape_string($connection, $_POST['ar_description']);

$q=mysqli_query($connection,"UPDATE about_us SET
                            `en_body` = '$en_body',
                            `ar_body`='$ar_body'
                            WHERE 
                            id = '$aboutus_id'
                            ")or die(mysqli_error($connection));
                 if($q){
                    $response_status.="<span style='color:green;'>Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
                
            
}

?>