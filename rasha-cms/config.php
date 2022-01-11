<?php
session_start();

global $connection;


$connection = mysqli_connect('localhost', 'root', '', 'dr_rasha');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'dr_rasha');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}


?>