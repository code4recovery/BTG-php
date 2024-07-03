<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<!--- get username and password from database and compare to passed along --->
<?php

	$servername = "mysql24.ezhostingserver.com";
	$username = "cheri";
	$password = "M@keC0ntact";
	$dbname = "btgwwtest";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	$getpass = $_GET["passwords"];
	$userid = $_GET["userid"];
		
	$sql = "SELECT * FROM btgwwlogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
  		}
	
	if ($result->num_rows > 0) 

$newuserid = $_GET['newuserid'];
$newuser = $_GET['newuser'];
$newpass = $_GET['newpass'];
$district = $_GET['district'];
$newlevel = $_GET['newlevel'];
echo $newuserid . "newuserid" . $newuser . "newpass" .  $newpass; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "UPDATE btgwwlogin
 		 SET usernames = '$newuser',
		 	 passwords = '$newpass',
		 	 district = '$district',
		 	 userlevel = $newlevel
		WHERE userid = $newuserid";
	
if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Update Failed!: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 

<?php include 'admin4.php';?>

<?php 
	
$conn->close();
	
?> 
   
</body>
</html>