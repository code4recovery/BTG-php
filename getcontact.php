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
$searchflang1 = $_GET["searchflang"];


if(isset($district1)){
    echo $searchdistrict1;
	
}else{
    echo 'district1 false' . '<br />';
	
}

if(isset($searchcity1)){
    echo $searchcity1 ;
	
}else{
    echo 'searchcity1 false' . '<br />';
}

if(isset($searchzip1)){
    echo $searchzip1 ;
	
}else{
    echo 'searchzip1 false' . '<br />';
}

if(isset($searchgender1)){
    echo $searchgender1 ;
	
}else{
    echo 'searchgender1 false' . '<br />';
}

if(isset($searchinterest1)){
    echo $searchinterest1 ;
	
}else{
    echo 'searchinterest1 false' . '<br />';
}


?>

<!---
$sql = "SELECT * FROM contacts WHERE 0=0
AND if(isset($district1)), (district = echo $searchdistrict1, 1=1)
AND if(isset($city1)), (city = echo $searchcity1, 2=2)
AND if(isset($zip1)), (zip = echo $searchzip1, 3=3)
AND if(isset($gender1)), (gender = echo $searchgender1, 4=4)
AND if(isset($interest1)), (interest = echo $searchinterest1, 5=5)";

	
	
	$result = $conn->query($sql);
  		// output data of each row
  		while($row = $result->fetch_assoc()) 
		{
			

            echo "name: " . $row["first"] . " " . $row["last"] . "<br><br>";
  		}

--->

<?php	
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
$sql = "SELECT * FROM contacts WHERE 0=0 AND district = $searchdistrict1";

$result = $conn->query($sql);	
// output data of each row
  		while($row = $result->fetch_assoc()) 
		{
			

            echo "name: " . $row["first"] . " " . $row["last"] . " " . $row["district"] . "<br><br>";
  		}

?>	
	
	
























<body>
</body>
</html>