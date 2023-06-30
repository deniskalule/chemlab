<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location: ./index.php');
	}

	$sql = "SELECT * FROM student_table WHERE id = '".$_SESSION['user']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();


	$select = "SELECT * FROM staff_table WHERE id = '".$_SESSION['user']."'";
	$result = $conn->query($select);
	$user2 = $result->fetch_assoc();

	
	
?>