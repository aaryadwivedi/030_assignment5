<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="student";
 
		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$doa=$_POST['doa'];
		$sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
	
	if($first_name == "" || $last_name == "" || $doa == ""|| $sub1 == ""|| $sub2 == "")
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
	$sql = "insert into primary_details(UID,firstName, lastName,doa,subj1,subj2) values('','".$first_name."', '".$last_name."', '".$doa."','".$sub1."','".$sub2."')";
	  // query execution
	if ($conn->query($sql) === TRUE) 
	{
	   echo "New record created successfully";
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>