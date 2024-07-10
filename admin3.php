<?php include 'header.php';?>
<!------- add page here -------->
<center>    
<font color="darkblue" size="4">Add a Coordinator</font><br><br /><br />
<form action="admin3a.php" method="get" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	Username:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="myuser"
		 			 message="Please enter a username"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required>
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Password:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="mypassword"
		 			 message="Please enter a password"
		 			 required="yes"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required>
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
		 			 style="WIDTH: 60px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required>
        </td>
    	<td align="right" nowrap>
        	Admin Level:&nbsp;
        	<select size="1" 
            		name="userlevel" 
                    style="WIDTH: 130px; HEIGHT: 22px; background-color: white; color: darkblue;">
		 				<option value="1">Local Coordinator</option>
						<option value="2">System Admin</option>
        	</select>
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
        	For System Administrators Enter the District as 0 (zero)
        </td>
    </tr>
    <tr>	
		<td align="center" colspan="4">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="Submit" value="Add Admin Coordinator" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
</body>
</html> 