<?php
include('config.php');
require('./AdminAuthCheck.php');
if(isset($_POST['update_list'])){

    $package_list_id = mysqli_real_escape_string($connection, $_POST['package_list_id']);
    $package_ar_value = mysqli_real_escape_string($connection, $_POST['package_list_value']);

    $q=mysqli_query($connection,"UPDATE package_item_details 
                                   SET ar_value = '$package_ar_value'
                                    WHERE package_info_id = '$package_list_id'")or die(mysqli_error($connection));


}
if(isset($_POST['delete_list'])){

    $package_list_id = mysqli_real_escape_string($connection, $_POST['package_list_id']);

    $q=mysqli_query($connection,"DELETE FROM  package_item_details 
                                    WHERE package_info_id = '$package_list_id'")or die(mysqli_error($connection));


}

if(isset($_POST['add_list'])){

    $package_list_id = mysqli_real_escape_string($connection, $_POST['package_id']);
    $package_ar_value = mysqli_real_escape_string($connection, $_POST['list_value']);


    $q=mysqli_query($connection,"INSERT INTO package_item_details 
                                    VALUES(NULL,'$package_list_id','$package_ar_value','$package_ar_value') 
                                    ")or die(mysqli_error($connection));


}


?>