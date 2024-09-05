<?php
session_start();

if($_SESSION['id']=="Admin"){

    header("Location: ../admin_dashboard/");   
}else{

    header("Location: ../user_dashboard/");   
}

?>