<?php

			// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class sendMail{


		public static function sendEMail($email,$body){

			require_once "libs/phpmailer/vendor/autoload.php";
			
			$mail = new PHPMailer;

			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'womenintech';                     // SMTP username
			    $mail->Password   = 'Sandgrid@2019';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('info@womenintech.co.in', 'WiT Support');
			    $mail->addAddress($email);     // Add a recipient
			    

			   /* // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'WiT Account Verification';
			    $mail->Body    = $body;
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    //echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

		public static function sendPasswordResetEMail($email,$body){

			require_once "libs/phpmailer/vendor/autoload.php";

			$mail = new PHPMailer;





			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'womenintech';                     // SMTP username
			    $mail->Password   = 'Sandgrid@2019';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('info@womenintech.co.in', 'WiT Support');
			    $mail->addAddress($email);     // Add a recipient
			    

			   /* // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'WiT Password Reset';
			    $mail->Body    = $body;
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    //echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

		public static function companyCreation($email,$body){

			require_once "libs/phpmailer/vendor/autoload.php";

			$mail = new PHPMailer;





			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'womenintech';                     // SMTP username
			    $mail->Password   = 'Sandgrid@2019';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('info@womenintech.co.in', 'WiT Support');
			    $mail->addAddress($email);     // Add a recipient
			    

			   /* // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Employer Account Registration';
			    $mail->Body    = $body;
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    //echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
		
		public static function sponsorEnquiryMail($email,$body){

			require_once "libs/phpmailer/vendor/autoload.php";

			$mail = new PHPMailer;





			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'womenintech';                     // SMTP username
			    $mail->Password   = 'Sandgrid@2019';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('info@womenintech.co.in', 'WiT Support');
			    $mail->addAddress($email);     // Add a recipient
			    

			   /* // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Event Sponsor Enquiry';
			    $mail->Body    = $body;
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    //echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
		
		public static function classBooked($email,$body){

			require_once "libs/phpmailer/vendor/autoload.php";

			$mail = new PHPMailer;





			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = 'womenintech';                     // SMTP username
			    $mail->Password   = 'Sandgrid@2019';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('info@womenintech.co.in', 'WiT Support');
			    $mail->addAddress($email);     // Add a recipient
			    

			   /* // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'WiT Growth Summit';
			    $mail->Body    = $body;
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    //echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

}
 


?>