<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	$bikeNumber = $_POST['bikeNumber'];
	$password = $_POST['password'];
	include_once 'ConnecteDatabase.class.php';
	$sql = "INSERT INTO information (bikeNumber, password ) VALUES ('$bikeNumber', '$password')";
	if ( mysqli_query( $con, $sql) ){
		echo '1';
		return;
	}
	else{
		echo '0';
		return;
	}
	
 ?>