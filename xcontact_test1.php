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

	
?>



<!------- add page here -------->

<?php
$cities = $pdo->query('SELECT DISTINCT city FROM contacts ORDER BY city');
?>

<form method="post" action="get-contact-2.php">
  <!-- ideally some csrf protection here -->
  <select name="city">
  <?php foreach ($cities as $city) {?>
    <option name="<?php echo $city?>"><?php echo $city?></option>
  <?php }?>
  <input type="submit" name="b1" />
  </select>
</form>

                   
<!------- end page here ------------>                   
                    
<?php 
	

$conn->close();
	
?> 

</body>
</html> 