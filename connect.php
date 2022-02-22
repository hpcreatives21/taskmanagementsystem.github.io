<?php
$user = 'root';
$password = '';
$db = 'taskmanagesystem';
$host = 'localhost';

$conn = mysqli_init();
$success = mysqli_real_connect(
   $conn,
   $host,
   $user,
   $password,
   $db
);

// define('SITEURL', 'http://localhost/taskmanagement/') ;
// define('LOCALHOST', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'taskmanagement');
// $link = mysqli_init();
// $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) ;
// $db_select = mysqli_select_db($conn, DB_NAME);

?>
