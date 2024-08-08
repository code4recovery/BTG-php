<?php

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
<<<<<<< HEAD
			$adminlevel = $row["userlevel"];
            $district = $row["district"];
			$usernames = $row["usernames"];
  		} 

		if ($result->num_rows == 0)
  { 

?>
<center>Either the username or password you entered did not match our records<br>
			 Please try again or contact your Database Administrator</center>

<?php
				include('index.php');
				exit();
				
			}
		
	   $_SESSION['usernames']  = $usernames;
       $_SESSION['adminlevel'] = intval( $adminlevel );
       $_SESSION['district']   = $district;

	} 

=======
		$adminlevel = $row["userlevel"];
            	$district = $row["district"];
		$usernames = $row["usernames"];
  		} 	
        
	$_SESSION['usernames']  = $usernames;
       	$_SESSION['adminlevel'] = intval( $adminlevel );
       	$_SESSION['district']   = $district;
	}
	   	
>>>>>>> d34f2fd7d627ad63141933f5d4b93e2a1b83d1cb
	// check if user is logged in
	if ( ! $adminlevel || ! $usernames ) {
		// redirect to login page
		header('Location: index.php');
		exit;
	}
