
<?php
$servername = "mysql24.ezhostingserver.com";
$username = "cheri";
$password = "M@keC0ntact";
$dbname = "btgwwtest";
$added = date('Y/m/d');

$first = $_GET['first'];
$last = $_GET['last'];
$interest = $_GET['interest'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$district = $_GET['district'];
$county = $_GET['county'];
$metro = $_GET['metro'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$age = $_GET['age'];
$gender = $_GET['gender'];
if(isset($_GET['flang'])) {
$flang = 1; }
else
$flang = 0;;

if ($first = ""){
      echo"Please press back and fill out firstname!";
$conn->close();
}
elseif ($last = ""){
      echo"Please press back and fill out lastname!";
$conn->close();
}else {
 echo "New record created successfully";
}
?> 

    
</body>
</html>