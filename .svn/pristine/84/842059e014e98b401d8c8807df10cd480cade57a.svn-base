<?php
session_start();

function logged_in(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}
	else{
		return false;
	}
}

function user_data($user_id){
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1){
		unset($func_get_args[0]);
		$data = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = $user_id"));		
		return $data;
	}		
}

?>