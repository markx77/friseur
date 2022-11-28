<?php

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
echo "mf";
exit();
}

if (!preg_match("#^[0-9]{0,}[-/]{0,1}[0-9]{0,}$#",$_POST['telefon'])){ 
echo "tf";
exit();
}
		
	
if(isset($_POST['fri2022']) AND $_POST['fri2022']==''){
	// $to = 'info@zwanzig12-webdesign.de';
	$to = 'jane.laurenz@gmx.de';
	$subject = 'Kontaktformular Website Hairlounge Mittweida';
	$headers = 'From: ' . $_POST['email'] . "\r\n" .
	'Reply-To: ' . $_POST['email'] . "\r\n" .
	'Content-type: text/html; charset=utf-8' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();	

	$message = 'Name: ' . $_POST['name'] . "<br>" .
			   'E-mail: ' . $_POST['email'] . "<br>" .
			   'Nachricht: ' . $_POST['nachricht'];
			   
	if(mail($to, $subject, $message, $headers)){	
		echo "erfolg";
	}
	else
	{
		echo "fail";
	}
}

else
	
	{
		echo "fail2";
	}

?>