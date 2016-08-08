<?php
/**
 * @author James Singizi
* @copyright 2016
*/

//get all required config files
require_once '../_inc/config.php';
require_once '../_inc/classes/notes.class.php';
require_once '../_inc/classes/account.class.php';

/**
 * @todo validate email, password before assigning to vars
 */

$data = array();
//$email="user02@gmail.com";
//$userPassword = "password123";
$email = filter_input(INPUT_GET, "email");
$userPassword = filter_input(INPUT_GET, "password");

$password = md5($encryption_key.$userPassword);

$account_id = md5(mcrypt_create_iv(64));
$created_on = time();

$user = new Account();

$user->email = $email;
$user->password = $password;
$user->account_id = $account_id;
$user->created_on = $created_on;

/**
 * @todo check account existence before this
 */

$userDetails = $user->accountDetails();
if (empty($userDetails)) {
	
	if ($user->add()) {
		$data['message'] = "success";
	}else {
		$data['message'] = "error";
	}
	
}else{
	$data['message'] = "account already exists";
}

echo json_encode($data);
