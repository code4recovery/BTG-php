<?php include('header.php') ?>		   

<!------- add page here -------->

<?php

	$userid = $_POST["userid"];

$sql = "SELECT * FROM btglogin WHERE userid = $userid";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc())
 {
    $newuser = $row['usernames'];
    $newpass = $row['passwords'];
    $district = $row['district'];
    $access = $row['userlevel'];
    $newuserid = $row['userid'];
}
?>	        
  
<center>    
<font color="darkblue" size="4">Add a Local Administrator</font><br><br /><br />
<form action="admin4b.php" method="post" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	Username:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="newuser"
		 			 message="Please enter a username"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $newuser;?>">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Password:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="newpass"
		 			 message="Please enter a password"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $newpass;?>">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	District:
        </td>
        <td align="left" colspan="1">
        	<INPUT name="district"
		 			 message="Please enter the district"
		 			 required="yes"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56
                     value="<?php echo $district;?>">
        </td>
    	<td align="right" nowrap>
        	Admin Level:&nbsp;
        	<?php if ($access == '1') { ?>
        		<select size="1" 
            		name="newlevel" 
                    style="WIDTH: 125px; HEIGHT: 22px; background-color: white; color: darkblue;">
						<option value="1" selected="selected">local Coordinator</option>
		 				<option value="2">System Admin</option>
        		</select>
            <?php } else { ?>
            	<select size="1" 
            		name="newlevel" 
                    style="WIDTH: 125px; HEIGHT: 22px; background-color: white; color: darkblue;">
						<option value="1">local Coordinator</option>
		 				<option value="2" selected="selected">System Admin</option>
        		</select>
            <?php } ?>
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
        	For System Administrators Enter the District as 0 (zero)
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
			<input type="hidden" name="newuserid" value="<?php echo $newuserid;?>">
			<input type="Submit" value="Update Admin Coordinator" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   


</body>
</html> 