<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	include_once 'ConnecteDatabase.class.php';
	$bikeNumber = $_POST['bikeNumber'];
	$password = $_POST['password'];
	$sql = "UPDATE information SET password = '$password' WHERE bikeNumber = '$bikeNumber'";
	if( mysqli_query( $con, $sql) ){
		echo '1';
		return;
	}
	else{
		echo '0';
		return;
	}
 ?>