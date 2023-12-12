<?php 

	sesion_start();

	if (!isset($_SESSION['logged_in'])){
		header("location:user_index.php");
	}
	else{
		header("location:user_logged_in.php");
	}
?>