<?php 

$email = $_POST['email'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                              

$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Username = 'larisa.mebel.tyr@gmail.com';                 
$mail->Password = 'iara12345';                           
$mail->SMTPSecure = 'ssl';                        
$mail->Port = 465;                                    
 
$mail->setFrom('', 'Shop.online');  
$mail->addAddress('larisa.mebel.tyr@gmail.com');     
//$mail->addAddress('ellen@example.com');             
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
$mail->isHTML(true);                                 

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>