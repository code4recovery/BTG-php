<?php include('header.php') ?>
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
	
				$sql = "SELECT * FROM btglogin WHERE userlevel < 3";
				$result = $conn->query($sql);
				// output data of each row
				while($row = $result->fetch_assoc())
				{
						$userid = $row['userid'];
						$newuser = $row['usernames'];
						$newpass = $row['passwords'];
						$district = $row['district'];
			?>
 		
						<a href="admin4a.php?userid=<?php echo $userid;?>&passwords=<?php echo $passwords; ?>">edit</a><br /> 
			<?php            			
						echo $newuser . " District    " . " " . $district;
			?> 
			<hr />

			<?php } ?>
		</td>
	</tr>
</table>
</center>
</body>
</html>