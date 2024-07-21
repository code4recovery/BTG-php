<?php

require 'config.php';

$contactid = $_POST["contactid"];
	
$updated = date('Y/m/d');
$contactid = $_POST['contactid'];
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
$goodtogo = $_POST['goodtogo'];
if(isset($_POST['flang'])) {
$flang = 1; }
else
$flang = 0;;


 $sql = "UPDATE btgcontacts 
 		 SET goodtogo = $goodtogo,
		 	 first = '$first',
		 	 last = '$last',
		 	 gender = '$gender',
		 	 age = $age,
		 	 email = '$email',
		 	 address = '$address' ,
		 	 state = '$state',
		 	 city = '$city',
		 	 zip = '$zip',
		 	 county = '$county',
		 	 phone = '$phone',
		 	 interest = '$interest',
		 	 district = $district,
		 	 flang = '$flang',
		 	 olang = '$olang',
		 	 updated = '$updated'
		WHERE contactid = $contactid";
		 
	
if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Update Failed: " . $sql . "<br>" . $conn->error;
}
?> 

<?php include 'update1.php';?>

   
</body>
</html>