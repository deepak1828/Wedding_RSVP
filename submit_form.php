<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT,OPTIONS');
//header("Access-Control-Allow-Headers: accept,Origin,content-type,headerToken");
header("Access-Control-Allow-Headers: DNT,X-Mx-ReqToken,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type, Accept, Origin, Accept-Encoding, GET,headerToken, POST,OPTIONS");
$name=strip_tags(trim($_POST['form_name']));
$event_name=strip_tags(trim($_POST['event_name']));
$form_mobile=strip_tags(trim($_POST['form_mobile']));
$no_guest=null;
if(isset($_POST['no_guest']))
	$no_guest=strip_tags(trim($_POST['no_guest']));

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;


$mail->setFrom('deepu.divya.deepu@gmail.com');
$mail->addAddress('deepu.divya.deepu@gmail.com', 'Deepak Patole');
$mail->Subject  = 'Marriage RSVP';
// $recipient = "deepu.divya.deepu@gmail.com";
// $subject = "Marriage RSVP";
// 	$message="Hi Sanchit, \r\n\r\n";
// 	$message.=$name." here, ";
// 	($event_name=='not')?$message.=" I will not be attending your marriage due to some reasons. Wish you a very Happy Married life":$message.=" I will be attending ".$event_name;
// 	($no_guest==null||$no_guest=="")?$message.=".":$message.=" with ".$no_guest." guests.\r\n \r\n";
// 	$message.="\r\n\r\nRegards\r\n";
// 	$message.=$name."\r\n";
// 	$message.=$form_mobile;
// 	$email_content .= "Message:\r\n$message\n";
$mail->Body ="hi";
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
	
	


 // Build the email headers.
        //$email_headers = "From: $name <$email>";


//         if (mail($recipient, $subject, $email_content, $email_headers)) {
//             // Set a 200 (okay) response code.
//             http_response_code(200);
//             header('Content-Type: application/json');
//             echo json_encode(["message"=>"Thank You! Your message has been sent."]);
//         } else {
//             // Set a 500 (internal server error) response code.
//             http_response_code(500);
//             header('Content-Type: application/json');
//             echo json_encode(["message"=>"Oops! Something went wrong and we couldn't send your message."]);
//         }




?>
