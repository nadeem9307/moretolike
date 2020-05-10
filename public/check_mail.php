<?php 
$sender = 'info@moretolike.com';
$recipient = 'zonvoirsameeksha@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

// if (mail($recipient, $subject, $message, $headers))
// {
// echo "Message accepted";
// }
// else
// {
// echo "Error: Message not accepted";
// }
$success = mail($recipient, $subject, $message, $headers);
if (!$success) {

$errorMessage = error_get_last()['message'];
print_r(error_get_last()); die();
}else{
	echo 'not send';
}
?>