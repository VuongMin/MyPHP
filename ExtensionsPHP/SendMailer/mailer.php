<?php
require "plugin/PHPMailer.php";


$mail= new PHPMailer();
//sender settings
$mail->setFrom("nthevinh98@gmail.com","The Vinh");
//receiver
$mail->addAddress("vuongm910@gmail.com","vuongmin");
//title mail
$mail->Subject="Mail rac!";
$mail->CharSet="utf-8";
$mail->Body=$mail->msgHTML(" i am a <b> victim .</b>");
if($mail->send()==false)
{
    echo "Error:" . $mail->ErrorInfo;
}
else
{
    echo "success!";
}