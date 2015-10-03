<?php

	//SMTP server settings	
	$host = "smtp.host.com";
    $port = "587";
    $username = "";
    $password = "";
	$destination = "iecbiot.ufrgs@gmail.com";
	
	
	$messageBody = "";
	
	if($_POST['name']!='false'){
		$messageBody .= '<p>Visitante: ' . $_POST["name"] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['email']!='false'){
		$messageBody .= '<p>Email: ' . $_POST['email'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}else{
		$headers = '';
	}
	if($_POST['phone']!='false'){		
		$messageBody .= '<p>Telefone: ' . $_POST['phone'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}
	if($_POST['message']!='false'){
		$messageBody .= '<p>Mensagem: ' . $_POST['message'] . '</p>' . "\n";
	}
	
	if($_POST["stripHTML"] == 'true'){
		$messageBody = strip_tags($messageBody);
	}
	
	if($host=="" or $username=="" or $password==""){
		$owner_email = $_POST["owner_email"];
		$headers = 'From:' . $_POST["email"] . "\r\n" . 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
		$subject = 'Mensagem enviada pelo site de ' . $_POST["name"];
		
		try{
			if(!mail($destination, $subject, $messageBody, $owner_email)){
				throw new Exception('mail failed');
				}else{
				echo 'mail sent';
			}
			}catch(Exception $e){
			echo $e->getMessage() ."\n";
		}
	}else{	
		require_once 'Mail.php';

		$to = $_POST["owner_email"];
		$subject = 'Mensagem enviada pelo site de ' . $_POST["name"];
		$headers = array (
		'From' => 'De:' . $_POST["email"] . "\r\n" . 'Content-Type: text/plain; charset=UTF-8' . "\r\n",
		'To' => $to,
		'Subject' => $subject);
		
		$smtp = Mail::factory(
					'smtp',
					array (
						'host' => $host,
						'port' => $port,
						'auth' => true,
						'username' => $username,
						'password' => $password));

		$mail = $smtp->send($to, $headers, $messageBody);
		mail($destination, $subject, $messageBody, $owner_email);
		
		try{
			if(PEAR::isError($mail)){
				echo $mail->getMessage();
				}else{
				echo 'mail sent';
			}
			}catch(Exception $mail){
			echo $mail->getMessage() ."\n";
		}
	}	
?>