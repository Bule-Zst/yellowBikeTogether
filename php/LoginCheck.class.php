<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	include_once 'ConnectDatabase.class.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select password from register where username = '$username'";
	$result = mysqli_query( $con, $sql);
	if( !$test = mysqli_fetch_array( $result) ){
		echo 'u0';
		return;
	}
	if( $test['password'] != $password ){
		echo 'p0';
		return;
	}
	else{
		echo '1';
		$_SESSION['login'] = '1';
		return;
	}
 ?>

	