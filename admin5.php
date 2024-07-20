<?php include ('header.php'); ?>
        
<center>		
<table>
	<tr>
		<td align="left">        
           
			<?php
	
				$sql = "SELECT * FROM btglogin WHERE userlevel<3";
				$result = $conn->query($sql);
				// output data of each row
				while($row = $result->fetch_assoc())
				{
					$userid = $row['userid'];
			?>
    		<br />
			<form method="POST" action="admin5a.php" name="button1">
				<input type="Hidden" name="userid" value="<?php echo $userid;?>" />
		    	<input type="submit" value="Delete " name="b13" style="width: 75px; height: 24px; background-color: silver;" size=35 />
			<?php
            	echo "username: " . $row["usernames"] . "   district " . $row["district"] . "<br><br><hr>";
  				}
			?>
			</form>
           
		</td>
	</tr>
</table>
</center>


</body>
</html>