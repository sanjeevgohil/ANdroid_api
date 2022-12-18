<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "school";

	$cn  = new mysqli($servername,$username,$password,$db);

	if($cn->connect_error)
	{
		die("Connection Error".$cn->Connect_ERROR);
	}

	$rno = $_POST['rno'];

	$query = "DELETE FROM stud where rollno='$rno'";

	$result = $cn->query($query);
	
	if($result ==1)
	{
		$response = array("status"=>"1", "message"=>"Record Delete Successfully");
	}
	else
	{
		$response = array("status"=>"0", "message"=>"Record Not Delete Successfully");
	}
	echo json_encode($response);

?>