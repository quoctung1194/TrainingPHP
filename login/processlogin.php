<?php
$servername = "localhost";
$username = "root";
$password = "";
$databale = "quanlyhoso";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databale);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST["username"];
$pass = $_POST["password"];

$result= mysqli_query($conn,"SELECT * FROM dangnhap WHERE Username = '$user' and Password = '$pass'  ") or die ("Failed to query databaSe ".mysqli_error());
$row = mysqli_fetch_array($result);
var_dump($row);
if($row['Username'] == $user && $row['Password'] == $pass ){
	echo "Login successfully!!!";
}else {
	echo "Failed to login!";
}

?>