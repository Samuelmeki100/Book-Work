<?php
// Include our additional file
include "include.php";
// Check to see if our form has been submitted
If(isset($_POST["email"]) == false) {
// $_POST variable for our "email" control doesn’t exist. The form has not been submitted
header('Location: contact.html');
} else {
// Form has been submitted
if(validate_email($_POST["email"]) == false) {
// Email address is invalid
echo "The email address is invalid";
} elseif($_POST["subject"] == "") {
// No subject entered
echo "No subject entered";
} elseif($_POST["message"] == "") {
// No message entered
echo "No message entered";
} else {
// Validation passed
if(send_email($_POST["email"], $_POST["subject"], $_POST["message"])) {
// Message sent
echo "Thankyou, your email has been sent";
} else {
// Error sending email
echo "An error occurred whilst sending the email, please try again later";
}
}
}
?>