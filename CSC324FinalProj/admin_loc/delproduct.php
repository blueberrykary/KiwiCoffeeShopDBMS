<?php
	session_start();
	require_once '../functions/functions.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT thumb='' FROM products WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		if(!empty($r['thumb'])){
			if(unlink($r['thumb'])){
				$delsql = "DELETE FROM products WHERE id=$id";
				if(mysqli_query($connection, $sql)){
					header("location: Admin1.php?products");
				}
			}
		}else{
			$delsql = "DELETE FROM products WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location: Admin1.php?products");
				}
		}

	}else{
		header('location: Admin1.php?products');
	}
        
        
       