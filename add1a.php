<?php include 'header.php';?>
<!------- add page here -------->
// define variables and set to empty values
<?php
$firstErr = $lastErr = $genderErr = $ageErr = $emailErr = $cityErr = $stateErr = $zipErr = $countyErr = $phoneErr = $interestErr = $districtErr = "";
$first = $last = $gender = $age = $email = $city = $state = $zip = $county = $phone = $interest = $district = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first"])) {
    $firstrr = "First Name is required";
  } else {
    $first = test_input($_POST["first"]);
  }

  if (empty($_POST["last"])) {
    $lasyErr = "Last Name is required";
  } else {
    $last = test_input($_POST["last"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["age"])) {
    $$ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["city"]);
  }
  
  if (empty($_POST["state"])) {
    $stateErr = "State is required";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["zip"])) {
    $zipErr = "Postal Code is required";
  } else {
    $zip = test_input($_POST["zip"]);
  }

  if (empty($_POST["county"])) {
    $countyErr = "County is required";
  } else {
    $county = test_input($_POST["county"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["interest"])) {
    $interestErr = "Facility Type is required";
  } else {
    $interest = test_input($_POST["interest"]);
  }

  if (empty($_POST["district"])) {
    $districtErr = "District is required";
  } else {
    $district = test_input($_POST["district"]);
  }
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>

<font color="darkblue" size="4">Add a Contact</font><br><br /><br />
<p><span class="error">* required field</span></p>
<form method="POST" name="add1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    First Name:
        <INPUT name="first"	style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $firstErr;?></span><br><br>
	Last Name:
     	<INPUT name="last"	style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $lastErr;?></span><br><br>
    Gender:
    	<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male			
		<span class="error">* <?php echo $genderErr;?></span><br><br>
    Age:
        <INPUT name="age" style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $ageErr;?></span><br><br>
    Email Address:
        <INPUT name="email" style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $emailErr;?></span><br><br>
    Street Address:
        <INPUT name="address" style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><br><br>
    City:    	
        <INPUT name="city" style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"size=56><span class="error">* <?php echo $cityErr;?></span><br><br>
    State:			
        <INPUT name="state" style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;"size=56><span class="error">* <?php echo $stateErr;?></span><br><br>
    Postal Code:
        <INPUT name="zip" style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $zipErr;?></span><br><br>
    County:
        <INPUT name="county"style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $countyErr;?></span><br><br>
    Phone:
        <INPUT name="phone" style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><span class="error">* <?php echo $phonrErr;?></span><br><br>
    Willing to Bridge:
		<input type="radio" name="interest" value="Corrections">Corrections
		<input type="radio" name="interest" value="Treatment">Treatment
		<input type="radio" name="interest" value="Both">Both
		<span class="error">* <?php echo $interestErr;?></span><br><brb>
    District Number:
        <INPUT name="district" style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;" size=4><span class="error">* <?php echo $districtErr;?></span><br><br>
    Spanish Speaking
        <input type="checkbox" name="flang" value="1">
    Other Language:
        <INPUT name="olang"	 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;" size=56><br><br>
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="Submit" value="Add Contact" name="b2">
</form>                    
 <!------- end page here ------------>                   
</body>
</html> 