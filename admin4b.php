<?php

$newuserid = $_POST['newuserid'];
$newuser = $_POST['newuser'];
$newpass = $_POST['newpass'];
$district = $_POST['district'];
$newlevel = $_POST['newlevel'];


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