<?php 

$host = 'db4free.net';
$username = 'qstorepart2';
$password = 'Roy1204#';
$dbname = 'ecom_database';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

 // echo "connected succesfully";
 ?>
