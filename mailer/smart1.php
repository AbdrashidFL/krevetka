<?php 

$namecompany = $_POST['user_name'];
$address = $_POST['user_address'];
$format = $_POST['user_format'];
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];


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
$mail->Port = 25;                                    // TCP port to connect to
 
$mail->setFrom('sales@krevetki.kz', 'Новая заявка сотрудничества');   // От кого письмо 
// $mail->addAddress('abdrashid.fl@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка сотрудничества';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Название компании: ' . $namecompany . ' <br>
	Адресс: ' . $address . ' <br>
	Формат: ' . $format . ' <br>
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . '';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "Ошибка";
} else {
    header('location: ../index.html');
}

?>