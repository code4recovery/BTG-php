<?php

require 'config.php';

$contactid = $_POST['contactid'];

$sql = "DELETE FROM btgcontacts WHERE contactid='$contactid'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
		

<!------- add page here -------->

<?php include 'delete1.php';?>

<!------- end page here ------------>               
   
</body>
</html>