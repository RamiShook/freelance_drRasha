<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if(!(isset($_SESSION["role"]))||!( $_SESSION["role"] == "admin")){
    header("LOCATION: login.php");
    exit();
}

if (isset($_GET['logout'])){
    session_destroy();
    header("Refresh: 2; url= ./login.php");
  
  }

?>