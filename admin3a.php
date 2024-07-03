<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>


<?php
$servername = "mysql24.ezhostingserver.com";
$username = "cheri";
$password = "M@keC0ntact";
$dbname = "btgwwtest";
$added = date('Y/m/d');

$myuser = $_GET['myuser'];
$mypassword = $_GET['mypassword'];
$district = $_GET['district'];
$userlevel = $_GET['userlevel'];

echo "Big BadaBOOM " . $myuser . " " . $mypassword; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO btgwwlogin
(usernames, passwords, userlevel, district) 
VALUES ('$myuser', '$mypassword', $userlevel, '$district')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 


<?php include 'admin3.php';?>


<?php 
global $pass;
$pass = "jones";
include('loginpost.php');
?>
    
</body>
</html>