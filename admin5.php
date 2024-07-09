<?php include ('header.php'); ?>
        
<center>		
<table>
<tr>
<td align="left">        
           
<?php
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM btglogin WHERE userlevel<3";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc())
	
		{
			$userid = $row['userid'];
?>
    		<br />
            <a href="admin5a.php?userid=<?php echo $userid;?>&passwords=<?php echo $passwords; ?>">delete</a><br />
           
<?php
            echo "username: " . $row["usernames"] . "   district " . $row["district"] . "<br>";
  		}

?>
</td>
</tr>
</table>
 </center>


</body>
</html>