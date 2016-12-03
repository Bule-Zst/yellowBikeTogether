<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	include_once 'ConnecteDatabase.class.php';
	$bikeNumber = $_POST['bikeNumber'];
	$sql = "select password from information where bikeNumber = '$bikeNumber'";
	$result = mysqli_query( $con, $sql);
	if( $test = mysqli_fetch_array( $result) ){
		echo $test['password'];
		return;
	}
	else{
		echo '0';
		return;
	}
 ?>