
<?php

require 'config.php';

$added = date('Y/m/d');

$myuser = $_POST['myuser'];
$mypassword = $_POST['mypassword'];
$district = $_POST['district'];
$userlevel = $_POST['userlevel'];

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