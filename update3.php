<!--- get username and password from database and compare to passed along --->
<?php

	$getpass = $_GET["passwords"];
	$contactid = $_GET["contactid"];
	
	$sql = "SELECT * FROM btglogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
  		}
	
	if ($result->num_rows > 0) {

$updated = date('Y/m/d');
$contactid = $_GET['contactid'];
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
$goodtogo = $_GET['goodtogo'];
if(isset($_GET['flang'])) {
$flang = 1; }
else
$flang = 0;;


 $sql = "UPDATE FROM btgcontacts 
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