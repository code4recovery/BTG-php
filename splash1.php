<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


</head>
<body>
<center>
<br /><br /><br />
<?php
//Starting the session	
session_start();
?>


<form action="loginpost.php" method="POST" name="login" target="_self">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    	<input name="user" type="text" id="user" />
    </td>
  </tr>
  <tr>
    <td>
    	<input name="passwords" type="password" id="passwords" />
    </td>
  </tr>
  <tr>
    <td>
    	<input name="b1" type="submit" />
    </td>
  </tr>
</table>
</form>
</center>






</body>
</html>