
<?php
$added = date('Y/m/d');
$first = filter_var($_GET['first'],FILTER_SANITIZE_STRING);
$last = filter_var($_GET['last'],FILTER_SANITIZE_STRING);
$interest = filter_var($_GET['interest'],FILTER_SANITIZE_STRING);
$address = filter_var($_GET['address'],FILTER_SANITIZE_STRING);
$city = filter_var($_GET['city'],FILTER_SANITIZE_STRING);
$state = filter_var($_GET['state'],FILTER_SANITIZE_STRING);
$zip = filter_var($_GET['zip'],FILTER_SANITIZE_NUMBER_INT);
$district = filter_var($_GET['district'],FILTER_SANITIZE_STRING);
$county = filter_var($_GET['county'],FILTER_SANITIZE_STRING);
$metro = filter_var($_GET['metro'],FILTER_SANITIZE_STRING);
$phone = filter_var($_GET['phone'],FILTER_SANITIZE_STRING);
$email = filter_var($_GET['email'],FILTER_SANITIZE_EMAIL);
$age = filter_var($_GET['age'],FILTER_SANITIZE_NUMBER_INT);
$gender = filter_var($_GET['gender'],FILTER_SANITIZE_STRING);
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