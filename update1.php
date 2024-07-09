<?php include('header.php'); ?>
<center>		
<table>
<tr>
<td align="left">        
           
<?php	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM btglogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
			$admindistrict = $row["district"];
  		}
		
	if ($admindistrict > 0) 
		{
	$sql = "SELECT * FROM btgcontacts WHERE district = $admindistrict";
		} else {
	$sql = "SELECT * FROM btgcontacts";
		}
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc())
	
		{
			$contactid = $row['contactid'];
?>
    		
            <a href="update2.php?contactid=<?php echo $contactid;?>&passwords=<?php echo $passwords; ?>">edit</a><br />
           
<?php

            echo "name: " . $row["first"] . " " . $row["last"] . "<br><br>";
  		}

?>
</td>
</tr>
</table>
 </center>


</body>
</html>