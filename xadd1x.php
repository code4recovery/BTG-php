<?php include 'header.php';?>

<!------- add page here -------->
<center>   
<form action="add2.php" method="get" name="add1">
<table style="width:300px;" border="0">
	<tr>
    	<td width="111" align="right">
        	&nbsp;<br>
        </td>
        <td align="center" colspan="3"> 
			<font color="darkblue" size="4">Add a Contact</font><br><br /><br />
        </td>
    </tr>
	<tr>
    	<td width="111" align="right">
        	First Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="first" id="first"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the first name of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the first name of the contact">
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Last Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="last" id="last"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the last name of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the last name of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Gender:
        </td>
        <td width="100">
        	<select size="1" 
            		name="gender" 
                    style="WIDTH: 125px; HEIGHT: 22px; background-color: white; color: darkblue;">
		 				<option>Select Gender</option>
						<option>Male</option>
						<option>Female</option>
        	</select>
        </td>
        <td width="104" align="right">
        	Age:
        </td>
        <td width="50">
            <INPUT name="age" id="age"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the age of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the age of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Email Address:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="email"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required  
           oninvalid="this.setCustomValidity('Please enter the email address of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the email address of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Street Address:
        </td>
        <td colspan="3">
        	<INPUT name="address"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the street address of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the street address of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	City:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="city"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the city of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the city of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	State:
        </td> 
    	<td align="left">
			<INPUT name="state"
		 			 style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required minlength="2" maxlength="2"
           oninvalid="this.setCustomValidity('Please enter the abreviation of the state or providence');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the abreviation of the state or providence">
        </td>
        <td align="right" nowrap>
            Postal Code:
        </td>
        <td>
        	<INPUT name="zip"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required 
           oninvalid="this.setCustomValidity('Please enter the Postal Code of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the age of the contact">
		</td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	County:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="county"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56 required
           oninvalid="this.setCustomValidity('Please enter the county name of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the county name of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Phone:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="phone"
		 			 style="WIDTH: 100%; HEIGHT: 22px; background-color: white; color: darkblue;px"
		 			 size=56 required
           oninvalid="this.setCustomValidity('Please enter the age of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the age of the contact">
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap">
        	Willing to Bridge:
        </td>
        <td align="left">
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 150px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option>Select Facility Type</option>	
						<option>Both</option>
						<option>Corrections</option>
                        <option>Treatment</option>
        	</select>
        </td>
    	<td align="right" colspan="1" nowrap>
        	District:
        </td>
        <td align="left">
        	<INPUT name="district"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=4 required
           oninvalid="this.setCustomValidity('Please enter the district or region of the contact');" 
           onchange="try{setCustomValidity('')}catch(e){};" x-moz-errormessage="Please enter the district or region of the contact">
        </td>
    </tr>
	<tr>
    	<td align="right" nowrap>
        	Spanish Speaking
        </td>
        <td nowrap colspan="3">
        	<input type="checkbox" name="flang">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Other Language:&nbsp;
        	<INPUT name="olang"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
		</td>
    </tr>
    <tr>
		<td>
			&nbsp;<br>
		</td>	
		<td align="center" colspan="3">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="Submit" value="Add Contact" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
</body>
</html> 