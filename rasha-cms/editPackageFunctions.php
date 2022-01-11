<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
if(isset($_POST['updatePackage']) && $_POST['updatePackage'] !=''){

$package_id           = mysqli_real_escape_string($connection, $_POST['updatePackage']);
$en_package_name      = mysqli_real_escape_string($connection, $_POST['en_package_name']);
$ar_package_name      = mysqli_real_escape_string($connection, $_POST['ar_package_name']);
$en_btn_label         = mysqli_real_escape_string($connection, $_POST['en_btn_label']);
$ar_btn_label         = mysqli_real_escape_string($connection, $_POST['ar_btn_label']);
$edited_package_price = mysqli_real_escape_string($connection, $_POST['edited_package_price']);
$btn_link             = mysqli_real_escape_string($connection, $_POST['btn_link']);
$display_order        = mysqli_real_escape_string($connection, $_POST['display_order']);

if($_POST['package_status'] == 'active'){
    $package_status = 1;
}else{
    $package_status = 0;
}
// check if thee display order changed 
        // if change than  change the display order to MAX(display_order +1 )
        if($display_order != $_POST['inital_display_order']){
            $q=mysqli_query($connection,"SELECT MAX(display_order)+1 from package_item");
                $lastDisplayOrder  = mysqli_fetch_row($q);
                $display_order = $lastDisplayOrder[0];
                $response_status.="<span style='color:red'>Display Order Changed By System To : ".$display_order."<br></span>";
        }


$q=mysqli_query($connection,"UPDATE package_item SET
                            `display_order` = '$display_order',
                            `package_en_name` = '$en_package_name',
                            `package_ar_name` = '$ar_package_name',
                            `en_button_label`='$en_btn_label',
                            `ar_button_label`='$ar_btn_label',
                            `package_price`='$edited_package_price',
                            `button_link`='$btn_link',
                            `is_active`='$package_status'
                            WHERE 
                            package_id = '$package_id'
                            ")or die(mysqli_error($connection));
                 if($q){
                    $response_status.="<span style='color:green;'>Data Updated </span>";
                }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}
                echo $response_status;
                
            
}

?>