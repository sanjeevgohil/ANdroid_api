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

	$nm = $_POST['snm'];
	$ct = $_POST['sct'];
	$stream = $_POST['stream'];

	$query = "INSERT INTO stud (name,city,stream) VALUES ('$nm', '$ct', '$stream')";

	$result = $cn->query($query);
	
	if($result ==1)
	{
		$response = array("status"=>"1", "message"=>"Record Insert Successfully");
	}
	else
	{
		$response = array("status"=>"0", "message"=>"Record Not Insert Successfully");
	}
	echo json_encode($response);

?>