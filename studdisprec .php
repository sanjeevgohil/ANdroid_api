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

	$query = "SELECT * FROM stud";
	$result = $cn->query($query);

	$row = $result->fetch_all(MYSQLI_ASSOC);
	
	if(empty($row))
	{
		$response = array("status"=>"1", "message"=>"Record Not Display Succefully");
	}
	else
	{
		$response = array("status"=>"0", "message"=>"Record Display Succefully", "data"=>$row);
	}
	echo json_encode($response);

?>