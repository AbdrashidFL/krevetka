<?php
$phone2 = $_POST['user_phone2'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.krevetki.kz';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'new@krevetka.kz';                 // Наш логин
$mail->Password = 'New@krevetka!krevetka';                           // Наш пароль от ящика
$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;
// $mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 24;                                    // TCP port to connect to
 
$mail->setFrom('sales@krevetki.kz', 'Новая заявка');   // От кого письмо 
// $mail->addAddress('abdrashid.fl@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Телефон: ' . $phone . '';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "Ошибка";
} else {
    header('location: ../index.html');
}

?>