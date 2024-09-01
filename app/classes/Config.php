<?php 
/**DB Create start */

    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname = "ideal_db";

    $sql="CREATE DATABASE IF NOT EXISTS $dbname";

    $connect=mysqli_connect($host,$dbuser,$password);

    $myDbCreate=mysqli_query($connect,$sql);

    if($myDbCreate==TRUE){
        $myConnection=mysqli_connect($host,$dbuser,$password, $dbname);
        //$myConnection=mysqli_connect('localhost','root','', 'database_crud');
    }
    else{
        echo "Your Database Not Created";
    }

    /**DB Create end */


    /**DB ProductsTable Create start */

$tblsql_stdinfo="CREATE TABLE IF NOT EXISTS students(
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
price FLOAT(10.2) NOT NULL,
stock INT (11) NOT NULL,
description text  NOT NULL,
image text NOT NULL
)";
$tbl_stdinfo = mysqli_query($myConnection,$tblsql_stdinfo);
if($tbl_stdinfo==TRUE)
{ echo "table created <br>";}
else {
    die('Query Problem..'.mysqli_error($tbl_stdinfo));
}

    /**DB ProductsTable Create end */


        /**DB TeacherTable Create start */

$tblsql_teacher="CREATE TABLE IF NOT EXISTS teachers(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50) NOT NULL,
   phone INT(11) NOT NULL,
   designation VARCHAR(50) NOT NULL,
   about text  NOT NULL,
   image text NOT NULL
   )";
   $tblsql_teacher = mysqli_query($myConnection,$tblsql_teacher);
   if($tblsql_teacher==TRUE)
   { echo "table created <br>";}
   else {
       die('Query Problem..'.mysqli_error($tblsql_teacher));
   }
   
       /**DB TeacherTable Create end */


    

    /**DB loginTable Create start */

  $tblsql_login="CREATE TABLE IF NOT EXISTS users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50) NOT NULL,
   email VARCHAR(50) NOT NULL,
   password VARCHAR(50) NOT NULL
   )";
   
   $tbl_login = mysqli_query($myConnection,$tblsql_login);
   if($tbl_login==TRUE)
   { echo "table created <br>";}
   else {
       die('Query Problem..'.mysqli_error($tbl_stdinfo));
   }
   
       /**DB loginTable Create end */


?>