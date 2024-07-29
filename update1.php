<?php include('header.php'); ?>
<br><br>
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
				//while($row = $result->fetch_assoc())
				while($result && $row = $result->fetch_assoc())
					{
					$contactid = $row['contactid'];
			?>
    		
			<form method="POST" action="update2.php" name="button11">
		    	<input type="submit" value="Edit Contact" name="b11" style="width:125px; height: 24px; background-color: whitesmoke;" size=35 />
				<input type="hidden" value=<?php echo $contactid;?> name="contactid">
			<?php
           		echo "name: " . $row["first"] . " " . $row["last"] . "<br><br><hr>";
				}
			?>
			</form>
           
		</td>
	</tr>
</table>
</center>


</body>
</html>