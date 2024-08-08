<?php

	//$servername = "mysql24.ezhostingserver.com";
	//$username = "cheri";
	//$password = "M@keC0ntact";
	//$dbname = "btgwwtest";

    $servername = "localhost";
 	$username = "urgaczpgdegkl";
	$password = "BTG@re@39";
	$dbname = "dbkqsuy93hyu21";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}

	session_start();

	$usernames     = isset( $_SESSION['usernames'] ) ? $_SESSION['usernames'] : '';
	$getpass       = isset( $_SESSION['passwords'] ) ? $_SESSION['passwords'] : '';
	$adminlevel    = isset( $_SESSION['adminlevel'] ) ? $_SESSION['adminlevel'] : '';
	$admindistrict = isset( $_SESSION['district'] ) ? $_SESSION['district'] : '';

	// initial login
	if (isset($_POST["user"]) && isset($_POST["passwords"])) {
		$getuser = $_POST["user"];
		$getpass = $_POST["passwords"];
		
		// todo sanitize inputs
		$sql = "SELECT * FROM btglogin WHERE usernames = '$getuser' AND passwords = '$getpass'";
		$result = $conn->query($sql);
		// output data of each row
  		//while($row = $result->fetch_assoc()) 
		while($result && $row = $result->fetch_assoc()) 
  		{
		$adminlevel = $row["userlevel"];
            	$district = $row["district"];
		$usernames = $row["usernames"];
  		} 	
        
	$_SESSION['usernames']  = $usernames;
       	$_SESSION['adminlevel'] = intval( $adminlevel );
       	$_SESSION['district']   = $district;
	}
	   	
	// check if user is logged in
	if ( ! $adminlevel || ! $usernames ) {
		// redirect to login page
		header('Location: splash1.php');
		exit;
	}
