
<?php

$added = date('Y/m/d');

$myuser = $_GET['myuser'];
$mypassword = $_GET['mypassword'];
$district = $_GET['district'];
$userlevel = $_GET['userlevel'];

$sql = "INSERT INTO btglogin
(usernames, passwords, userlevel, district) 
VALUES ('$myuser', '$mypassword', $userlevel, '$district')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 

<?php include 'admin3.php';?>
    
</body>
</html>