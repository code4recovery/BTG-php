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

	$getpass = $_GET["passwords"];
	$contactid = $_GET["contactid"];
	
	$sql = "SELECT * FROM btgwwlogin WHERE passwords = '$getpass'";
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
  		{
			$adminlevel = $row["userlevel"];
			$usernames = $row["usernames"];
			$passwords = $row["passwords"];
  		}
	
	if ($result->num_rows > 0) {

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
        
        
<?php
$sql = "SELECT * FROM contacts WHERE contactid = $contactid";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc())
 {
    $first = $row['first'];
    $last = $row['last'];
    $gender = $row['gender'];
    $age = $row['age'];
    $email = $row['email'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['State'];
    $zip = $row['zip'];
    $county = $row['county'];
    $phone = $row['phone'];
    $interest = $row['interest'];
    $district = $row['district'];
    $flang = $row['flang'];
    $olang = $row['olang'];
    $goodtogo = $row['goodtogo'];
}
echo $goodtogo;
	}
	
	?>	        
        
        <center>    
<font color="darkblue" size="4">Update Contact Info</font><br><br /><br />
<form action="update3.php" method="get" name="edit1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	Available:
        </td>
        <td align="center" colspan="3">
        	<?php if ($goodtogo == '1') { ?>
        	<input type="radio" value="1" name="goodtogo" checked="checked" />Yes
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" value="0" name="goodtogo" />No
            <?php } else { ?>
        	<input type="radio" value="1" name="goodtogo" />Yes
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" value="0" name="goodtogo" checked="checked" />No
            <?php } ?>
            
        </td>
    </tr><tr>
    	<td width="111" align="right">
        	First Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="first"
		 			 message="Please enter the first name"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $first;?>">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Last Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="last"
		 			 message="Please enter the last name"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $last;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Gender:
        </td>
        <td width="100">
        	<?php if ($gender == 'Male') { ?>
        		<select size="1" 
            		name="gender" 
                    style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;">
						<option selected="selected">Male</option>
		 				<option>Female</option>
        		</select>
            <?php } else { ?>
            	<select size="1" 
            		name="gender" 
                    style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;">
		 				<option>Male</option>
						<option selected="selected">Female</option>
                </select>
            <?php } ?>
        </td>
        <td width="104" align="right">
        	Age:
        </td>
        <td width="50" align="right">
            <INPUT name="age"
		 			 message="Please enter contact age"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $age;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Email Address:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="email"
		 			 message="Please enter the email address"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $email;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Street Address:
        </td>
        <td colspan="3">
        	<INPUT name="address"
		 			 message="Please enter the complete street address"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $address;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	City:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="city"
		 			 message="Please enter the city name"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $city;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	State:
        </td> 
    	<td align="left">
			<INPUT name="state"
		 			 message="Please enter the state name"
		 			 style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $state;?>">
        </td>
        <td align="right">
            Postal Code:
        </td>
        <td align="right">
        	<INPUT name="zip"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $zip;?>">
		</td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	County:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="county"
		 			 message="Please enter the name of the county they live in - this will be used to more closely match release location"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $county;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Phone:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="phone"
		 			 message="Please enter the phone number"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;px"
		 			 size=56
                     value="<?php echo $phone;?>">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap">
        	Willing to Bridge:
        </td>
        <td align="left">
        	<?php if ($interest == 'Both') { ?>
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 100px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option selected="selected">Both</option>
						<option>Corrections</option>
                        <option>Treatment</option>
        	</select>
            <?php } elseif ($interest == 'Corrections') { ?>            
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 100px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option>Both</option>
						<option selected="selected">Corrections</option>
                        <option>Treatment</option>
        	</select>
            <?php } else { ?>            
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 100px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option>Both</option>
						<option>Corrections</option>
                        <option selected="selected">Treatment</option>
        	</select>
            <?php } ?>
        </td>
    	<td align="right" colspan="1" nowrap>
        	District Number:
        </td>
        <td align="right">
        	<INPUT name="district"
		 			 message="Please enter the number of the District"
		 			 required="yes"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=4
                     value="<?php echo $district;?>">
        </td>
    </tr>
    <tr>
    </tr>
	<tr>
    	<td align="right" nowrap>
        	Spanish Speaking
        </td>
        <td>
        	<?php if ($flang == 0) { ?>
        	<input type="checkbox" name="flang">
            <?php } else { ?>
        	<input type="checkbox"  checked="checked" name="flang">
            <?php } ?>            
        </td>
        <td align="right">
            Other Language:
        </td>
        <td align="right">
        	<INPUT name="olang"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $olang;?>">
		</td>
    </tr>
    <tr>	
		<td align="center" colspan="3">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="hidden" name="contactid" value="<?php echo $contactid;?>">
			<input type="Submit" value="Update Contact Info" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
		

   
</body>
</html>