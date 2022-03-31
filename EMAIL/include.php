<?php
// Set your own error handler
set_error_handler("error_handler");
// Create the function that will handle the error
function error_handler($err_number, $err_text, $err_file, $err_line) {
// Display this error
echo "Oops, an error occurred: " . $err_text . "<br />";
echo "Error code: " . $err_number . "<br />";
echo "In file: " . $err_file . "<br />";
echo "On line: " . $err_line . "<br />";
// Send an error report
$report = "Error: " . $err_text . "\r\n";
$report = $report . "Error code: " . $err_number . "\r\n";
$report = $report . "In file: " . $err_file . "\r\n";
$report = $report . "On line: " . $err_line;
$success = send_mail("error@ralphsdomainname.com", "Error report", $report);
if($success == true) {
echo "This error has been reported to the website administrator.<br />";
}
}
// Function to validate an email address
function validate_email($email) {
if($email == "") {
// No email address returned
return false;
} elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
// The email address is not in the correct format
return false;
} else {
// Email address is valid
return true;
}
}
// Function to send an email
function send_email($from, $subject, $message) {
if(validate_email($from) == false) {
// Sender email address is invalid
return false;
} elseif($subject == "") {
// No subject supplied
return false;

} elseif($message == "") {
// No message supplied
return false;
} else {
// Set timezone
date_default_timezone_set("Europe/London");
// The email address to send to
$to = "ralph@ralphsdomainname.com";
// Prepare the email headers
$headers = "From: " . $from . "\r\n";
$headers = $headers . "Reply-To: " . $from . "\r\n";
// Send the email
ini_set("sendmail_from", $from);
return mail($to, $subject, $message, $headers, "-f" .$from);
}
}
?>

