<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	session_start();
	if( $_SESSION['login'] == '1' ){
		echo '1';
	}
	else{
		echo '0';
	}
 ?>