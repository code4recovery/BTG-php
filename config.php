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

	session_start();

	// initial login
	if (isset($_GET["user"]) && isset($_GET["passwords"])) {
		$getuser = $_GET["passwords"];
		$getpass = $_GET["passwords"];
		
		// todo sanitize inputs
		$sql = "SELECT * FROM btglogin WHERE user = '$getuser' AND passwords = '$getpass'";
		$result = $conn->query($sql);
		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
            $district = $row["district"];
			$usernames = $row["usernames"];
            $passwords = $row["passwords"];
  		} 
        
	   $_SESSION['usernames'] = $usernames;
       $_SESSION['passwords'] = $passwords;
       $_SESSION['adminlevel'] = $adminlevel;
       $_SESSION['district'] = $district;
	}
	   	
	// check if user is logged in
	if (isset($_SESSION['usernames']) && isset($_SESSION['passwords'])) {
		$usernames = $_SESSION['usernames'];
		$getpass = $_SESSION['passwords'];
		$adminlevel = $_SESSION['adminlevel'];
		$admindistrict = $_SESSION['district'];
	} else {
		// redirect to login page
		header('Location: splash1.php');
		exit;
	}