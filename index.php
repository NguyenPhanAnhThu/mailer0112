<?php
//https://myaccount.google.com/lesssecureapps?pli=1
require 'src/PHPMailer.php';
$mail = new PHPMailer(true);                        
try {
    $mail->CharSet = "UTF-8";

    $mail->SMTPDebug = 0;                              
    $mail->isSMTP();                                  
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'huonghuong08.php@gmail.com';                 // SMTP username
    $mail->Password = '0123456789000';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('huonghuong08.php@gmail.com', 'Admin');
    $mail->addAddress('huongnguyenak96@gmail.com', 'Customer');     // Add a recipient
    $mail->addAddress('anhle3532@gmail.com');               // Name is optional
    $mail->addReplyTo('huonghuong08.php@gmail.com', 'Admin');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Xác nhận đơn hàng';
    $mail->Body    = 'Chào bạn, 
                    <br/>
                    <p style="color:blue">Cảm ơn bạn đã đặt hàng.....</p>
                    ';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}