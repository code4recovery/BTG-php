<?php include 'header.php';?>

<!------- add page here -------->

<center>    
<font color="darkblue" size="4">Add a Coordinator</font><br><br /><br />
<form action="admin3a.php" method="post" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	Username:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="myuser"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required
           			 oninvalid="this.setCustomValidity('Please enter the admin username');" 
           			 onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the admin username">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Password:
        </td>
        <td align="left" colspan="2">
        	<INPUT name="mypassword"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required
           			 oninvalid="this.setCustomValidity('Please enter the admin password');" 
           			 onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the admin password">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	District:
        </td>
        <td align="left" colspan="1">
        	<INPUT name="district"
		 			 style="WIDTH: 60px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           			 oninvalid="this.setCustomValidity('Please enter the district or region of the admin - system admins should be zero');" 
           			 onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the district or region of the admin - system admins should be zero">
        </td>
    	<td align="right" nowrap>
        	Admin Level:&nbsp;
        	<select size="1" 
            		name="userlevel" id="userlevel" required>
		 			<option value="">Select Level</option>	
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
			<input type="Submit" value="Add Admin Coordinator" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
</body>
</html> 