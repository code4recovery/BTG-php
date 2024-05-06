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

$first = $_POST['first'];
$last = $_POST['last'];
$interest = $_POST['interest'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$district = $_POST['district'];
$county = $_POST['county'];
$metro = $_POST['metro'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
if(isset($_POST['flang'])) {
$flang = 1; }
else
$flang = 0;;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO contacts
(state, district, first, last, interest, address, city, zip, county, phone, email, added, goodtogo, age, gender, flang) 
VALUES ('$state', '$district', '$first', '$last', '$interest', '$address', '$city', $zip, '$county', '$phone', '$email', '$added', 1, $age, '$gender', '$flang')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 

<?php 
global $pass;
$pass = "jones";
include('loginpost.php');
?>
    
</body>
</html>
