<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="student";
 
		$UID=$_POST['uid'];

	if($UID == "")
	{
         die("Please enter the fields!");
    }
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	$sql = "DELETE FROM primary_details WHERE UID = $UID";
	  // query execution
	if ($conn->query($sql) === TRUE) 
	{
	   echo "Record deleted successfully";
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>