<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db( $con, 'zst_yellow_bike' );
	mysqli_set_charset( $con, "utf8" );
 ?>
