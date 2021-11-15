<?php 

//sasession _start
    session_start();


 // create constanst no repeating the user name connection 
 define ('SITEURL','http://localhost/food-order-project/');
 define ('LOCALHOST','localhost');
 define ('DB_USERNAME','root');
 define ('DB_PASSWORD','');
 define ('DB_NAME','food-order-project');

 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); // data base connection 
 $db_select = mysqli_select_db($conn,DB_NAME) or die (mysqli_error()); // selecting the database 

?>