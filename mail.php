<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'anthony@wolfandkey.com';   // SMTP username
$mail->Password = 'uvaw chip pgtv ijwm';   // SMTP password
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                    // TCP port to connect to

$location = "https://smoothieking.rebrealdev.com/thank-you.html";
// Sender info
$mail->setFrom('anthony@wolfandkey.com', 'aCoder Jones');
$mail->addReplyTo('anthony@wolfandkey.com', 'ReplyName');

// Add a recipient
$mail->addAddress($_POST['Email']);

$mail->addCC('acoderjonesworld@gmail.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'Smoothie King - Form Submission using PHPMailer';

// Mail body content
// $body .= "Name: ".$_REQUEST['Name']."<br>";
// $body .= "</br>Email: ".$_REQUEST['Email']." \n";

// $mail->Body    = $body;

      
           
            $mail->Body = "
            <html>
            <head>
                <title>Smoothie King - Form Submission using PHPMailer</title>
                </head>

                <body>
                    <div class='submission'>
                        <h3>Thank you for Subscribin'!</h3>
                        <h2>You SMART...</h2>
                        <h2>&#128513;</h2>
                        <div>
                            <p>Name: ".$_REQUEST['Name']."</p>
                        </div>
                        <div>
                            <p>Email: ".$_REQUEST['Email']."</p>
                        </div>
                    </div>
                </body>
            </html>
            
            ";

// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    header( "Location: $location" );
    echo 'Message has been sent.'; 
} 

header( "Location: $location" );
 
?>