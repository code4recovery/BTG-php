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
	$getpass = $_GET["pass"];
	$sorter = $_GET["sorter"];
	
	$sql = "SELECT * FROM btgwwlogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
    		
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
			$admindistrict = $row["district"];
  		}
	
	if ($result->num_rows > 0) {
	
	
  
  	
	
?>


                    
	<?php
		if ($adminlevel > 1) { 

	?>
		<center>
			<table cellpadding="0" cellspacing="0" border="0" bordercolor="red" align="center">
			    <tr>
			    	<td valign="top">
						<form method="get" action="admin3.php"name="button21">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
				        	<input type="submit" value="Add an Admin" name="b21" style="width:260px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
			    	<td valign="top">
						<form method="get" action="admin4.php"name="button22">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
				        	<input type="submit" value="Update an Admin" name="b22" style="width:260px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
			    	<td valign="top">
						<form method="get" action="admin5.php"name="button23">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
				        	<input type="submit" value="Delete an Admin" name="b23" style="width:260px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
				</tr>
			</table>
        <center>
        
	<?php }  ?>
    
		<center>
			<table cellpadding="0" cellspacing="0" border="0" bordercolor="red" align="center">
			    <tr>
			    	<td valign="baseline">
						<form method="get" action="add1.php" name="button11">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
		    	        	<input type="submit" value="Add a Contact" name="b11" style="width:260px; height: 24px; background-color: whitesmoke;" size=35 />
			          	</form>
					</td>
			    	<td valign="baseline">
						<form method="get" action="update1.php"name="button12">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
				        	<input type="submit" value="Update Contact Info" name="b12" style="width:260px; height: 24px; background-color: whitesmoke;" size=35>
						</form>
			        </td>
			    	<td valign="baseline">
						<form method="get" action="delete1.php" name="button13">
							<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
							<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
							<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
            				<input type="hidden" name="district" value="<?php echo $district;?>">
		    	        	<input type="submit" value="Delete a Contact" name="b13" style="width:260px; height: 24px; background-color: whitesmoke;" size=35 />
			          	</form>
					</td>
				</tr>
			</table>
        <center>  
<!---- insert contact table here ------>           
 

<?php
	
	$sqlcity = "SELECT DISTINCT city FROM contacts ORDER BY city";
	$cities = $conn->query($sqlcity);
  		while($cityrow = $cities->fetch_assoc()) 
		{
			 echo "city: " . $cityrow["city"] . "<br>";
		}
?>
<?php
	
	$sqlzip = "SELECT DISTINCT zip FROM contacts ORDER BY zip";
	$zips = $conn->query($sqlzip);
  		while($ziprow = $zips->fetch_assoc()) 
		{
			 echo "info: " . $ziprow["zip"] . "<br>";
		}
?>
<?php
	
	$sqldistrict = "SELECT DISTINCT district FROM contacts ORDER BY district";
	$districts = $conn->query($sqldistrict);
  		while($districtrow = $districts->fetch_assoc()) 
		{
			 echo "info: " . $districtrow["district"] . "<br>";
		}
?>
    
<table border="0" width="100%">
 <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=district&pass=<?php echo $getpass; ?>"><font size="6">State<br>District</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=first&pass=<?php echo $getpass; ?>"><font size="6">Name</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=city&pass=<?php echo $getpass; ?>"><font size="6">Address</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=city&pass=<?php echo $getpass; ?>"><font size="6">County</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=gender, age&pass=<?php echo $getpass; ?>"><font size="6">Gender<br>Age</font></a></td>
            <td valign="bottom" align="left"><font size="6">Phone<br>Email</font></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=interest&pass=<?php echo $getpass; ?>"><font size="6">Willing<br>&nbsp;&nbsp;&nbsp;to<br> Bridge</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=flang DESC&pass=<?php echo $getpass; ?>"><font size="6">Other<br>Language</font></a></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Added</font></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Updated</font></td>
        </tr>    
<?php
	
	$sqlcontacts = "SELECT * FROM contacts ORDER BY $sorter";
	$contacts = $conn->query($sqlcontacts);
	// output data of each row
	while($contactrow = $contacts->fetch_assoc())
	{
	
?>		
        <!--Use a while loop to make a table row for every DB row-->
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="top"><?php echo $contactrow["State"] . " D" . $contactrow["district"]; ?></td>
            <td valign="top" nowrap><?php echo $contactrow["first"] . " " . $contactrow["last"]; ?></td>
            <td valign="top"><?php echo $contactrow["address"]; ?><br><?php echo $contactrow["city"] . " " . $contactrow["zip"]; ?></td>
            <td valign="top"><?php echo $contactrow["county"]; ?></td>
            <td valign="top"><?php echo $contactrow["gender"]; ?><br><?php echo "age: " . $contactrow["age"]; ?></td>
            <td valign="top"><?php echo $contactrow["phone"]; ?><br><?php echo $contactrow["email"]; ?></td>
            <td valign="top"><?php echo $contactrow["interest"]; ?></td>
            <td valign="top"><?php echo $contactrow["olang"]; ?><br><?php if ($contactrow['flang'] == '1') { ?> Spanish <?php }; ?></td>
            <td valign="top"><?php echo $contactrow["added"]; ?></td>
            <td valign="top"><?php echo $contactrow["updated"]; ?></td>
        </tr>    
        
        <?php } ?>
        
</table>
<!---- end contact table ------->                          
<?php 
	}                  
$conn->close();

?> 
</body>
</html>   