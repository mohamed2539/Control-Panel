<?php
	
	include 'DB.php' ;
	
	$data = file_get_contents("php://input");
	$obj = json_decode($data);
	$db = DB::getInstance();
	header('Content-Type: application/json');

	if (!isset($obj->{'username'})){
		print "{\"status\":0,\"message\":\"Username is Missing !\"}";
	
	} else if(!isset($obj->{'email'}){
		print "{\"status\":0,\"message\":\"Email is Missing !\"}";
	} else if(!isset($obj->{'password'}){
		print "{\"status\":0,\"message\":\"password is Missing !\"}";
	}else{

		$username = $obj->{'username'};
		$useremail = $obj->{'email'};
		$userpassword = $obj->{'password'};

		insert_new_user = $db->insert('users',
			[
			'user_name'  	=> $username,
			'user_email' 	=> $useremail,
			'user_password' => $userpassword


		]);
		if ($insert_new_user) {
		print "{\"status\":1,\"message\":\"User Registerd Successfully\"}";
		}else{
			print "{\"status\":1,\"message\":\"Error Registerd User\"}";
		}
	}
	

?>
