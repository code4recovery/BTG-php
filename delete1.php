<?php include 'header.php';?>
		
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
    		
            <a href="delete2.php?contactid=<?php echo $contactid;?>&passwords=<?php echo $passwords; ?>">delete</a><br />
           
<?php
            echo "name: " . $row["first"] . " " . $row["last"] . "<br>";
  		}

?>
</td>
</tr>
</table>
 </center>


</body>
</html>