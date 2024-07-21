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

$getuser = $_POST["user"];
$sql = "SELECT * FROM btglogin WHERE usernames = '$getuser'";
$result = $conn->query($sql);
  		// output data of each row
while($row = $result->fetch_assoc()) 
 		{
			$_SESSION['adminlevel'] = $row["userlevel"];
     		$_SESSION['district'] = $row["district"];
  		} 
         
?>
