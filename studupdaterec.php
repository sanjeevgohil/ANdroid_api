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
	$nm = $_POST['snm'];
	$ct = $_POST['sct'];
	$stream = $_POST['stream'];

	$query = "UPDATE stud SET name = '$nm', city = '$ct' ,stream= '$stream' WHERE rollno = '$rno'";

	$result = $cn->query($query);
	
	if($result ==1)
	{
		$response = array("status"=>"1", "message"=>"Record Update Succefully");
	}
	else
	{
		$response = array("status"=>"0", "message"=>"Record Not Upadate Succefully");
	}
	echo json_encode($response);

?>