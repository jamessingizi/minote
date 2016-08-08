<?php
/**
 * @author James Singizi
 * @copyright 2016 
 */

//get all required config files
require_once '../_inc/config.php';
require_once '../_inc/classes/notes.class.php';
require_once '../_inc/classes/account.class.php';

$email = filter_input(INPUT_GET, "email");
$password = filter_input(INPUT_GET, "password");

$user = new Account();
$user->email = $email;
$data = array();

$userDetails = $user->accountDetails();

if(empty($userDetails)){
	$data['message']='invalid login';
}else{
	
	if(md5($encryption_key.$password)==$userDetails['password']){
		
		$data['message']='success';
		$_SESSION["account_id"] = $userDetails['account_id'];
		
	}else{
		$data['message']='invalid login';
	}
	
}

echo json_encode($data);


