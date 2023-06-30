<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ./index.php');
	}

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$admin = $query->fetch_assoc();

	$sql2 = "SELECT * FROM staff_table WHERE id = '".$_SESSION['admin']."'";
	$query2 = $conn->query($sql2);
	$user = $query2->fetch_assoc();
	
?>