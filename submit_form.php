<?php 

$name=strip_tags(trim($_POST['form_name']));
$event_name=strip_tags(trim($_POST['event_name']));
$form_mobile=strip_tags(trim($_POST['form_mobile']));
$no_guest=null;
if(isset($_POST['no_guest']))
	$no_guest=strip_tags(trim($_POST['no_guest']));

$recipient = "deepu.divya.deepu@gmail.com";
$subject = "Marriage RSVP";
	$message="Hi Sanchit, \r\n\r\n";
	$message.=$name." here, ";
	($event_name=='not')?$message.=" I will not be attending your marriage due to some reasons. Wish you a very Happy Married life":$message.=" I will be attending ".$event_name;
	($no_guest==null||$no_guest=="")?$message.=".":$message.=" with ".$no_guest." guests.\r\n \r\n";
	$message.="\r\n\r\nRegards\r\n";
	$message.=$name."\r\n";
	$message.=$form_mobile;
	$email_content .= "Message:\r\n$message\n";

	
	


 // Build the email headers.
        //$email_headers = "From: $name <$email>";


        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode(["message"=>"Thank You! Your message has been sent."]);
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            header('Content-Type: application/json');
            echo json_encode(["message"=>"Oops! Something went wrong and we couldn't send your message."]);
        }




?>