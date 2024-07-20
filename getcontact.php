<?php include('header.php'); ?>

<?php
$district1 = $_GET["district1"];
$searchdistrict1 = $_GET["searchdistrict"];
$city1 = $_GET["city1"];
$searchcity1 = $_GET["searchcity"];
$zip1 = $_GET["zip1"];
$searchzip1 = $_GET["searchzip"];
$gender1 = $_GET["gender1"];
$searchgender1 = $_GET["searchgender"];
$interest1 = $_GET["interest1"];
$searchinterest1 = $_GET["searchinterest"];
$flang1 = $_GET["flang1"];
$searchflang1 = "Spanish";
$both = "Both";
?>

<!---------------------------------------------------------------------------------------------------------------->
<center>
<br /><br />
<font color="red" size="6">
Check the Box(s) to Search By in the top row<br>
Then choose the search option from the second row<br />
<br />
the more options checked the fewer results will be found
</font> 
<form action="getcontact.php" method="get">          
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
                <option>Choose Facility</option>
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
        </td>
    </tr>
    <tr>
        <td colspan="11" align="center">
        	<hr color="silver">
        </td>
    </tr>
    
</table>
</form> 
<!--------------------------------------------------------------------------------------->



<br><br><br>
<table border="0" width="100%">
 <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="bottom" align="left"><font size="6">State<br>District</font></td>
            <td valign="bottom" align="left"><font size="6">Name</font></td>
            <td valign="bottom" align="left"><font size="6">Address</font></td>
            <td valign="bottom" align="left"><font size="6">County</font></td>
            <td valign="bottom" align="left"><font size="6">Gender<br>Age</font></td>
            <td valign="bottom" align="left"><font size="6">Phone<br>Email</font></td>
            <td valign="bottom" align="left"><font size="6">Willing<br>&nbsp;&nbsp;&nbsp;to<br> Bridge</font></td>
            <td valign="bottom" align="left"><font size="6">Other<br>Language</font></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Added</font></td>
            <td valign="bottom" align="left"><font size="6">Date<br>Updated</font></td>
        </tr>    

<?php	
  $sql = "SELECT * FROM btgcontacts WHERE 0=0";
if (isset($_GET['district1'])) {
  $sql .= ' AND district = "' . $_GET['searchdistrict'] . '"';
}else{ '"'; }

if (isset($_GET['city1'])) {
  $sql .= ' AND city = "' . $_GET['searchcity'] . '"';
}else{ '"'; }

if (isset($_GET['zip1'])) {
  $sql .= ' AND zip = "' . $_GET['searchzip'] . '"';
}else{ '"'; }

if (isset($_GET['gender1'])) {
  $sql .= ' AND gender = "' . $_GET['searchgender'] . '"';
}else{ '"'; }

if (isset($_GET['interest1'])) {
	$sql .= ' AND (interest = "' . $_GET['searchinterest'] . '" OR interest="both")';
  }else{ '"'; }

if (isset($_GET['flang1'])) {
  $sql .= ' AND flang = "' . $_GET['flang1'] . '"' ;
}


$result = $conn->query($sql);	
// output data of each row
  		while($row = $result->fetch_assoc()) 
		{	
            
?>
        <!--Use a while loop to make a table row for every DB row-->
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td valign="top"><?php echo $row["State"] . " D" . $row["district"]; ?></td>
            <td valign="top" nowrap><?php echo $row["first"] . " " . $row["last"]; ?></td>
            <td valign="top"><?php echo $row["address"]; ?><br><?php echo $row["city"] . " " . $row["zip"]; ?></td>
            <td valign="top"><?php echo $row["county"]; ?></td>
            <td valign="top"><?php echo $row["gender"]; ?><br><?php echo "age: " . $row["age"]; ?></td>
            <td valign="top"><?php echo $row["phone"]; ?><br><?php echo $row["email"]; ?></td>
            <td valign="top"><?php echo $row["interest"]; ?></td>
            <td valign="top"><?php echo $row["olang"]; ?><br><?php if ($row['flang'] == '1') { ?> Spanish <?php }; ?></td>
            <td valign="top"><?php echo $row["added"]; ?></td>
            <td valign="top"><?php echo $row["updated"]; ?></td>
        </tr>    
        
<?php } ?>
        
</table>
<center>
<?php
  if ($result->num_rows == 0)
  { 
      echo "<h1>" . "No results too many boxes were checked - try again" . "</h1?";
   }
?>      
</center>
	
	
























<body>
</body>
</html>