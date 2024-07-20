
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
	
	if ($result->num_rows > 0) {
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM btglogin WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
		

<!------- add page here -------->

<?php include 'admin5.php';?>
 <!------- end page here ------------>                   
                    
<?php 
	}
$conn->close();
	
?> 
   
</body>
</html>