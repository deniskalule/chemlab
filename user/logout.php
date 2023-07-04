<?php
	include("./includes/session.php");
	if($user)
	{
		$id = $user['id'];
		$role = $user['role'];
		$name = $user['lname'].' '.$user['fname'];
		$action = "Logged Out";
		
		$insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$name', '$role','$action')");
	}

	else
	{
		$id = $user2['id'];
		$role = $user2['role'];
		$name = $user2['lname'].' '.$user2['fname'];
		$action = "Logged Out";
		
		$insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$name', '$role','$action')");
	}
	session_destroy();

	header('location: ../index.php');
?>