<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>


<?php
$servername = "mysql24.ezhostingserver.com";
$username = "cheri";
$password = "M@keC0ntact";
$dbname = "btgwwtest";
$added = date('Y/m/d');

$first = $_GET['first'];
$last = $_GET['last'];
$interest = $_GET['interest'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$district = $_GET['district'];
$county = $_GET['county'];
$metro = $_GET['metro'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$age = $_GET['age'];
$gender = $_GET['gender'];
if(isset($_GET['flang'])) {
$flang = 1; }
else
$flang = 0;;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO btgcontacts
(state, district, first, last, interest, address, city, zip, county, phone, email, added, goodtogo, age, gender, flang) 
VALUES ('$state', '$district', '$first', '$last', '$interest', '$address', '$city', $zip, '$county', '$phone', '$email', '$added', 1, $age, '$gender', '$flang')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 

<?php 
$adminlevel = $_GET['adminlevel'];
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
		   

<!------- add page here -------->

  
<center>    
<font color="darkblue" size="4">Add a Contact</font><br><br /><br />
<form action="add3.php" method="get" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	First Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="first"
		 			 message="Please enter the first name"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
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
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Gender:
        </td>
        <td width="100">
        	<select size="1" 
            		name="gender" 
                    style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;">
		 				<option>Male</option>
						<option>Female</option>
        	</select>
        </td>
        <td width="104" align="right">
        	Age:
        </td>
        <td width="50">
            <INPUT name="age"
		 			 message="Please enter contact age"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Email Address:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="email"
		 			 message="Please enter the email address"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Street Address:
        </td>
        <td colspan="3">
        	<INPUT name="address"
		 			 message="Please enter the complete street address"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	City:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="city"
		 			 message="Please enter the city name"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
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
		 			 size=56>
        </td>
        <td align="right">
            Postal Code:
        </td>
        <td>
        	<INPUT name="zip"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
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
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
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
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;px"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap">
        	Willing to Bridge:
        </td>
        <td align="left">
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 100px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option>Both</option>
						<option>Corrections</option>
                        <option>Treatment</option>
        	</select>
        </td>
    	<td align="right" colspan="1" nowrap>
        	District Number:
        </td>
        <td align="left">
        	<INPUT name="district"
		 			 message="Please enter the number of the District"
		 			 required="yes"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=4>
        </td>
    </tr>
    <tr>
    </tr>
	<tr>
    	<td align="right" nowrap>
        	Spanish Speaking
        </td>
        <td>
        	<input type="checkbox" name="flang">
        </td>
        <td align="right">
            Other Language:
        </td>
        <td>
        	<INPUT name="olang"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
		</td>
    </tr>
    <tr>	
		<td align="center" colspan="3">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="Submit" value="Add Contact" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
                    
<?php 
	
$conn->close();
	
?> 
    
</body>
</html>