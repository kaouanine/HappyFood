<?php 
    //Start Session
    
if(1==1){session_start();};

    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/happy_food/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(); //SElecting Database


