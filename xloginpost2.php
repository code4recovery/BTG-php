<?php include ('header.php'); ?>
<!---- insert contact table here ------>
<?php
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	$getpass = $_GET["passwords"];
	$sorter = $_GET["sorter"];
?>	
<center>
<br /><br />
<font color="red" size="6">
Check the Box(s) to Search By in the top row<br>
Then choose the search option from the second row<br />
<br />
the more options checked the fewer results will be found
</font> 
<form action="getcontact.php" method="GET">          
<table>
    <tr>
        <td rowspan="5" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
        <td colspan="11" align="center">
        	<hr color="silver">
        </td>
        <td rowspan="5" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
    </tr>
	<tr>
		<td colspan="1">
			<input type="Checkbox" name="district1" value="1"><font color="red" size="5">District</font>
		</td>
        <td rowspan="2" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
		<td>
			<input type="Checkbox" name="city1" value="1"><font color="red" size="5">City</font>
		</td>
        <td rowspan="2" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
		<td>
			<input type="Checkbox" name="zip1" value="1"><font color="red" size="5">Postal Code</font>
		</td>
        <td rowspan="2" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
		<td colspan="1">
			<input type="Checkbox" name="gender1" value="1"><font color="red" size="5">Gender</font>
		</td>
        <td rowspan="2" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
		<td>
			<input type="Checkbox" name="interest1" value="1"><font color="red" size="5">Willing to Bridge</font>
		</td>
        <td rowspan="2" bgcolor="silver" style="width:.25px;">
        	&nbsp;<br>
        </td>
		<td align="center">
			<input type="Checkbox" name="flang1" value="1"><font color="red" size="5">Spanish</font>
		</td>
    </tr>
  	<tr>
    	<td align="right">
		<?php
			$sqldistrict = "SELECT DISTINCT district FROM btgcontacts ORDER BY district";
			$districts = $conn->query($sqldistrict);
		?>
			<table>
				<tr>
    				<td>
  						<select name="searchdistrict" style="width:130px;">
                            	<option>Choose a District</option>
  							<?php while($districtrow = $districts->fetch_assoc()) {?>
    							<option value="<?php echo $districtrow["district"]?>"><?php echo $districtrow["district"]?></option>
  							<?php }?>
  						</select>
         			</td>
    			</tr>
			</table>
        </td>
    	<td align="right">	
		<?php
			$sqlcity = "SELECT DISTINCT city FROM btgcontacts ORDER BY city";
			$cities = $conn->query($sqlcity);
		?>
			<table>
				<tr>
    				<td>
  						<select name="searchcity" style="width:130px;">
						  	<option>Choose a City</option>
  							<?php while($cityrow = $cities->fetch_assoc()) {?>
    							<option value="<?php echo $cityrow["city"]?>"><?php echo $cityrow["city"]?></option>
  							<?php }?>
  						</select>
         			</td>
     			</tr>
			</table>
		</td>
    	<td align="right">
		<?php
			$sqlzip = "SELECT DISTINCT zip FROM btgcontacts ORDER BY zip";
			$zips = $conn->query($sqlzip);
		?>
			<table>
				<tr>
    				<td>
  						<select name="searchzip" style="width:130px;">
						  	<option>Choose a Postal Code</option>
  							<?php while($ziprow = $zips->fetch_assoc()) {?>
    							<option value="<?php echo $ziprow["zip"]?>"><?php echo $ziprow["zip"]?></option>
  							<?php }?>
  						</select>
         			</td>
     			</tr>
			</table>
        </td>
        <td align="right">
        	<select name="searchgender" style="width:130px;">
			<option>Select Gender</option>
            	<option value="Female">Female</option>
                <option value="Male">Male</option>
            </select>
        </td>
        <td align="right">
        	<select name="searchinterest" style="width:130px;">
				<option>Select Facility</option>
            	<option value="Both">Both</option>
                <option value="Corrections">Corrections</option>
                <option value="Treatment">Treatment</option>
            </select>
        </td>
        <td>
        	&nbsp;<br>
        </td>
	</tr>
    <tr>
        <td colspan="13" align="center">
        	<br>
        	<input type="submit" name="b1" value="Search">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
        </td>
    </tr>
    <tr>
        <td colspan="11" align="center">
        	<hr color="silver">
        </td>
    </tr>
    
</table>
</form> 

<br><br><br>
<font size="6" color="red">Click on the column title to sort by that column</font>
<hr>
<table border="0" width="100%">
 <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=district&passwords=<?php echo $getpass; ?>"><font size="6">State<br>District</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=first&passwords=<?php echo $getpass; ?>"><font size="6">Name</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=city&passwords=<?php echo $getpass; ?>"><font size="6">Address</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=city&passwords=<?php echo $getpass; ?>"><font size="6">County</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=gender, age&passwords=<?php echo $getpass; ?>"><font size="6">Gender<br>Age</font></a></td>
            <td valign="bottom" align="left"><font size="6">Phone<br>Email</font></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=interest&passwords=<?php echo $getpass; ?>"><font size="6">Willing<br>&nbsp;&nbsp;&nbsp;to<br> Bridge</font></a></td>
            <td valign="bottom" align="left"><a href="loginpost.php?sorter=flang DESC&passwords=<?php echo $getpass; ?>"><font size="6">Other<br>Language</font></a></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Added</font></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Updated</font></td>
        </tr>    
<?php
	
	$sqlcontacts = "SELECT * FROM btgcontacts ORDER BY $sorter";
	$contacts = $conn->query($sqlcontacts);
	// output data of each row
	while($contactrow = $contacts->fetch_assoc())
	{
	
?>		
        <!--Use a while loop to make a table row for every DB row-->
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="top"><?php echo $contactrow["State"] . " D" . $contactrow["district"]; ?></td>
            <td valign="top" nowrap><?php echo $contactrow["first"] . " " . $contactrow["last"]; ?></td>
            <td valign="top"><?php echo $contactrow["address"]; ?><br><?php echo $contactrow["city"] . " " . $contactrow["zip"]; ?></td>
            <td valign="top"><?php echo $contactrow["county"]; ?></td>
            <td valign="top"><?php echo $contactrow["gender"]; ?><br><?php echo "age: " . $contactrow["age"]; ?></td>
            <td valign="top"><?php echo $contactrow["phone"]; ?><br><?php echo $contactrow["email"]; ?></td>
            <td valign="top"><?php echo $contactrow["interest"]; ?></td>
            <td valign="top"><?php echo $contactrow["olang"]; ?><br><?php if ($contactrow['flang'] == '1') { ?> Spanish <?php }; ?></td>
            <td valign="top"><?php echo $contactrow["added"]; ?></td>
            <td valign="top"><?php echo $contactrow["updated"]; ?></td>
        </tr>    
        
        <?php } ?>
        
</table>
</center>
<!---- end contact table ------->                          
<?php 
	               
$conn->close();

?> 

</body>
</html>   