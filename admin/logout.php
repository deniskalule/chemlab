<?php
	// session_start();
	include("./includes/session.php");
	$id = $_SESSION['admin'];
	if($_SESSION['role'] == "admin")
	{
		$role = $_SESSION['role'];
		$action = "Logged Out";
		$name = $admin['name'];

		$insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$name', '$role','$action')");
	}
	else
	{
		$role = $user['role'];
		$action = "Logged Out";
		$name = $user['lname']. ' '. $user['fname'];

		$insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$name', '$role','$action')");
	}
	
	session_destroy();
	


	header('location: index.php');
?>