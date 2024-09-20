<?php include('header.php') ?>
<center>
<table>
	<tr>
		<td align="left" nowrap="nowrap">   
			
			<?php
	
				$sql = "SELECT * FROM btglogin WHERE userlevel < 3";
				$result = $conn->query($sql);
				// output data of each row
				//while($row = $result->fetch_assoc())
				while($result && $row = $result->fetch_assoc())
				{
						$userid = $row['userid'];
						$usernames = $row['usernames'];
						$newpass = $row['passwords'];
						$district = $row['district'];
				
			?>
 		
				
		 	<form method="POST" action="admin4a.php" name="button1">
				<input type="Hidden" name="userid" value="<?php echo $userid;?>" />
		    	<input type="submit" value="Edit" name="b13" style="width:35px; height: 24px; background-color: silver;" size=35 />
			<?php            			
				echo $row["usernames"] . " District    " . " " . $row["district"] . "<br><br><hr>";
			?> 
			</form>	
			<?php } ?>
		</td>
	</tr>
</table>
</center>
</body>
</html>
