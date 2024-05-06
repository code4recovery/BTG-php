<body>
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

	$getpass = $_POST["pass"];
	
	$sql = "SELECT * FROM btgwwlogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
    		echo "id: " . $row["userlevel"];
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
  		}
	
	if ($result->num_rows > 0) {
	echo "bangbang ";
	
  
  	echo "Big Boom Boom " . $adminlevel . "<br>";
	echo $adminlevel . $usernames . $passwords; 
?>


  <form action="add1.php" method="post" name="backtoadmin" target="_self">
					<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
					<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
					<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
                    <input type="submit" value="Back to Admin Page" name="b1">
                    </form>
                    
<?php 
 echo "Have a good day!";

	}else	{

  echo "Have a bad day!";
 }

$conn->close();
	
?> 

</body>
</html>   
