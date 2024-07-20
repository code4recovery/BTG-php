<?php

$newuserid = $_GET['newuserid'];
$newuser = $_GET['newuser'];
$newpass = $_GET['newpass'];
$district = $_GET['district'];
$newlevel = $_GET['newlevel'];


$sql = "UPDATE btglogin
 		SET usernames = '$newuser',
		 	passwords = '$newpass',
		 	district = '$district',
		 	userlevel = $newlevel
		WHERE userid = $newuserid";
	
if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Update Failed!: " . $sql . "<br>" . $conn->error;
}
?> 

<?php include 'admin4.php';?>

   
</body>
</html>