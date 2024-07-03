<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<!--- get username and password from database and compare to passed along --->
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

	$passwords = $_GET["passwords"];
	$userid = $_GET["userid"];
	
	$sql = "SELECT * FROM btgwwlogin WHERE passwords = '$passwords'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
  		}
	
	if ($result->num_rows > 0) {
?>

<center>

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
		   

<!------- add page here -------->

<?php


$sql = "SELECT * FROM btgwwlogin WHERE userid = $userid";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc())
 {
    $newuser = $row['usernames'];
    $newpass = $row['passwords'];
    $district = $row['district'];
    $access = $row['userlevel'];
    $newuserid = $row['userid'];
}
?>	        
  
<center>    
<font color="darkblue" size="4">Add a Local Administrator</font><br><br /><br />
<form action="admin4b.php" method="get" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	Username:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="newuser"
		 			 message="Please enter a username"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $newuser;?>">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Password:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="newpass"
		 			 message="Please enter a password"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $newpass;?>">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	District:
        </td>
        <td align="left" colspan="1">
        	<INPUT name="district"
		 			 message="Please enter the district"
		 			 required="yes"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $district;?>">
        </td>
    	<td align="right" nowrap>
        	Admin Level:&nbsp;
        	<?php if ($access == '1') { ?>
        		<select size="1" 
            		name="newlevel" 
                    style="WIDTH: 125px; HEIGHT: 22px; background-color: white; color: darkblue;">
						<option value="1" selected="selected">local Coordinator</option>
		 				<option value="2">System Admin</option>
        		</select>
            <?php } else { ?>
            	<select size="1" 
            		name="newlevel" 
                    style="WIDTH: 125px; HEIGHT: 22px; background-color: white; color: darkblue;">
						<option value="1">local Coordinator</option>
		 				<option value="2" selected="selected">System Admin</option>
        		</select>
            <?php } ?>
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
        	For System Administrators Enter the District as 0 (zero)
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="hidden" name="newuserid" value="<?php echo $newuserid;?>">
			<input type="Submit" value="Update Admin Coordinator" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
                    
<?php 
	}else	{
  echo "Have a bad day!";
 }

$conn->close();
	
?> 

</body>
</html> 