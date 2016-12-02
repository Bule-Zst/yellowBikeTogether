<?php 
	include_once 'ConnectDatabase.class.php';
	session_start();
	if( $_SESSION['login'] == 1 ){
		echo '1';
	}
	else{
		echo '0';
	}
 ?>