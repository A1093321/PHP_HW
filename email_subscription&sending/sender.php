<?php
require("DBconnect.php"); 
$SQL="SELECT * FROM email_subscription";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);

$subject = $_POST["subject"];
$subject = nl2br($subject);
$comment = $_POST["comment"];
$comment = nl2br($comment);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1093321@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'joshshih0208';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = 'ssl';
    $mail->Charset = 'UTF-8';

    //Recipients
    $mail->setFrom('a1093321@mail.nuk.edu.tw', 'Mailer');

    while( $row=mysqli_fetch_assoc($result) ){
        $mail->addAddress($row["email"], $row["eNO"]);
        
    }

    //$mail->addAddress('joshshih997@gmail.com', 24);
    //$mail->addAddress($email, $eNO);     //Add a recipient
    //$mail->addAddress('joshshih24@gmail.com', 'User 24');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $message="Hi! the comment is:<br><br>".$comment."<br><br>";
    $mail->Body    = $comment;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>