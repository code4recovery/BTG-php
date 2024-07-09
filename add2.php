
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



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO btgcontacts
(state, district, first, last, interest, address, city, zip, county, phone, email, added, goodtogo, age, gender, flang) 
VALUES ('$state', '$district', '$first', '$last', '$interest', '$address', '$city', $zip, '$county', '$phone', '$email', '$added', 1, $age, '$gender', '$flang')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 

<?php 
include('add1.php');
?>
    
</body>
</html>