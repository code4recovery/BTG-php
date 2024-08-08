
<?php

require 'config.php';

$added = date('Y/m/d');
$first = filter_var($_POST['first'],FILTER_SANITIZE_STRING);
$last = filter_var($_POST['last'],FILTER_SANITIZE_STRING);
$interest = filter_var($_POST['interest'],FILTER_SANITIZE_STRING);
$address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'],FILTER_SANITIZE_STRING);
$zip = filter_var($_POST['zip'],FILTER_SANITIZE_NUMBER_INT);
$district = filter_var($_POST['district'],FILTER_SANITIZE_STRING);
$county = filter_var($_POST['county'],FILTER_SANITIZE_STRING);
$metro = filter_var($_POST['metro'],FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$age = filter_var($_POST['age'],FILTER_SANITIZE_NUMBER_INT);
$gender = filter_var($_POST['gender'],FILTER_SANITIZE_STRING);
if(isset($_POST['flang'])) {
$flang = 1; }
else
$flang = 0;;


$sql = "INSERT INTO btgcontacts
(State, district, first, last, interest, address, city, zip, county, phone, email, added, goodtogo, age, gender, flang) 
VALUES ('$state', '$district', '$first', '$last', '$interest', '$address', '$city', $zip, '$county', '$phone', '$email', '$added', 1, $age, '$gender', '$flang')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 

<?php 
include('add1.php');
?>
    
</body>
</html>
