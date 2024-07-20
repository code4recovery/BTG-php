
<!--- get username and password from database and compare to passed along --->
<?php

		// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	$getpass = $_GET["passwords"];
	$userid = $_GET["userid"];
		
	$sql = "SELECT * FROM btglogin WHERE passwords = '$getpass'";
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


$sql = "UPDATE btglogin
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