
<?php

$sql = "DELETE FROM btglogin WHERE userid='$userid'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>
		

<!------- add page here -------->

<?php include 'admin5.php';?>
 <!------- end page here ------------>                   
                    
   
</body>
</html>