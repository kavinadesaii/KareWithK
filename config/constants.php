<?php
    //start session
    session_start();

    define('SITEURL', 'http://localhost/karewithk');
    
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','product-order');
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn)); //connecting database
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn)); //selecting database   
?>     