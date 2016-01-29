<?php

$servername = "internal-db.s208881.gridserver.com";
$username = "db208881_ivan";
$password = "L4Lpi314159!e272?";
$dbname = "db208881_rose";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

/****************************************************
DISPLAY DATABASE SUBMISSIONS
****************************************************/
				
$sql = "SELECT id, name, email, phone, school, date FROM submissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	echo "<table border='1'><tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Email</b></td><td><b>Phone</b></td><td><b>School / Organization</b></td><td><b>Charter Renewal Date</b></td></tr>";
	// output data of each row
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["school"]. "</td><td>" . $row["date"]. "</td></tr>";
	}
	echo "</table>";
} 

else
{
	echo "0 results";
}
					
?>