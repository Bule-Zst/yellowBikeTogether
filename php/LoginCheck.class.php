<?php 
	include_once 'ConnectDatabase.class.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	mysqli_select_db( $con, "zst_yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
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
		return;
	}
 ?>

	