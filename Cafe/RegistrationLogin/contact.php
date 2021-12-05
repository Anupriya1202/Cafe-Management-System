<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","contact");

if(!$conn)
{
	echo "Database connection faild...";
}

$sql = "INSERT INTO contactus (firstname, lastname, message) VALUES ('Savita', 'Varshney', 'Hi. Nice Cafe.')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>