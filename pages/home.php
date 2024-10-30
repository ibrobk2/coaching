<?php
session_start();

if($_SESSION['email']=="admin@gmail.com"){
    // echo "<script>alert('hello')</script>";
    header("Location: ../admin_dashboard/");   
}else{
    // echo "<script>alert('hi')</script>";

    header("Location: ../user_dashboard/");   
}

?>