<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
if(isset($_POST['updateLang']) && $_POST['updateLang'] == "true"){
$lang_id =mysqli_real_escape_string($connection, $_POST['lang_id']);
$lang_en_value      = mysqli_real_escape_string($connection, $_POST['lang_en_value']);
$lang_ar_value      = mysqli_real_escape_string($connection, $_POST['lang_ar_value']);
$lang_name          = mysqli_real_escape_string($connection, $_POST['lang_name']);

$q=mysqli_query($connection,"UPDATE lang SET
                            `lang_name` = '$lang_name',
                            `en_value` = '$lang_en_value',
                            `ar_value`='$lang_ar_value'
                            WHERE 
                            lang_id = '$lang_id'
                            ")or die(mysqli_error($connection));
                 if($q){
                    $response_status.="<span style='color:green;'>Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
                
            
}

?>