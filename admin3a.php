
<?php
$servername = "mysql24.ezhostingserver.com";
$username = "cheri";
$password = "M@keC0ntact";
$dbname = "btgwwtest";
$added = date('Y/m/d');

$myuser = $_GET['myuser'];
$mypassword = $_GET['mypassword'];
$district = $_GET['district'];
$userlevel = $_GET['userlevel'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO btglogin
(usernames, passwords, userlevel, district) 
VALUES ('$myuser', '$mypassword', $userlevel, '$district')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 

<?php include 'admin3.php';?>
    
</body>
</html>