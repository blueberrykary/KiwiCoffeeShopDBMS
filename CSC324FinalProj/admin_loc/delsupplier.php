<?php
	session_start();
	require_once '../functions/functions.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM supplier WHERE id='$id'";
		if(mysqli_query($connection, $sql)){
			header('location: Admin1.php?view_supplier');
		}
	}else{
		header('location: Admin1.php?view_supplier');
	}
?>