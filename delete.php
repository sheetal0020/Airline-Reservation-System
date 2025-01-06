<?php
session_start();
include_once 'dbconnect2.php';

if(!isset($_SESSION['user'])){
    header("Location: customersignin.html");
}else{
    $user = $_SESSION['user'];	
    $username = $_POST["username"];

	$delete = "DELETE FROM passenger WHERE ID = '$username'";
	if(mysqli_query($con,$delete)){
		 header("Location: homepage.html");
	}else{
		echo "Error";
	}

}


?>