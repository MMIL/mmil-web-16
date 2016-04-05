<?php
require 'PHPMailerAutoload.php';
$fname=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($email, $name);
$mail->addAddress('', '');     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = 'Hello MMIL!<br>This message is from <b>'. $name .'</b><br>'. $name .' has visited mmil site and wants to say something that is given below.<br> 
                  <p style="background-color: #DE5233;color:white; padding:10px;font-weight: bold;font-family: sans-serif;letter-spacing: 1px;">'. $message .'</p>
                  Thanks!';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ohh! Something went wrong. Please Try again..';
} else { 
    echo '<p class="confirm_message">Success !!! your message has been sent.</p>';
}
?>