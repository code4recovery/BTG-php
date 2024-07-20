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

	$getpass = $_POST["passwords"];
		
	$sql = "SELECT * FROM btglogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
            $district = $row["district"];
			$usernames = $row["usernames"];
            $passwords = $row["passwords"];
  		} 
        
        //Starting the session	
	   session_start();
	   $_SESSION['usernames'] = $usernames;
       $_SESSION['passwords'] = $passwords;
       $_SESSION['adminlevel'] = $adminlevel;
       $_SESSION['district'] = $district;
?>