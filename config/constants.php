<?php
    //session start
    session_start();
    define('SITEURL','http://localhost/food-order/');
    define('LOCALHOST', 'localhost');// define () function is used to create a constant,
    define('DB_USERNAME', 'root');// define () function is used to create a constant,
    define('DB_PASSWORD', '');// define () function is used to create a constant,
    define('DB_NAME', 'food-order');// define () function is used to create a constant,
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die(mysqli_error());// Database Connection mysqli_connect('server name', 'Username', 'password')
    $db_select= mysqli_select_db($conn, DB_NAME) or die(mysqli_error());//selecting database
    ?>
