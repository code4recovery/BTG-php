<?php include 'header.php';?>
<center>		
<table>
	<tr>
		<td align="left">        
           
			<?php
	
				if ($admindistrict > 0) 
				{
					$sql = "SELECT * FROM btgcontacts WHERE district = $admindistrict";
				} else {
					$sql = "SELECT * FROM btgcontacts";
				}
	
				$result = $conn->query($sql);
				// output data of each row
				while($row = $result->fetch_assoc())
	
				{
				$contactid = $row['contactid'];
			?>
    		<form method="POST" action="delete2.php" name="button1">
				<input type="Hidden" name="contactid" value="<?php echo $contactid;?>" />
		    	<input type="submit" value="Delete " name="b13" style="width: 75px; height: 24px; background-color: silver;" size=35 />
			<?php
            	echo "username: " . $row["first"] . "  " . $row["last"] . "<br><br><hr>";
  				}
			?>
			</form>
		</td>
	</tr>
</table>
</center>


</body>
</html>