<?php

$currentpagefull = $_SERVER['SCRIPT_NAME'];

/* Set e-mail recipient */
$myemail = "nikushx@nikushx.com";

/* Check all form inputs using check_input function */
if (isset($_POST['contact-name'])) {
$name = check_input($_POST['contact-name'], "Your Name");
$email = check_input($_POST['contact-email'], "Your E-mail Address");
$message = check_input($_POST['contact-msg'], "Your Message");
}

/* If e-mail is not valid show error message */
if (isset($_POST['contact-email'])) {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}
}
/* Let's prepare the message for the e-mail */

$subject = "From NIKUSHx.com";

$message = "

$name has sent you a message using your NIKUSHx.com:

Name: $name
Email: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
if (!isset($_SESSION['username'])){ 
    header('Location: http://www.nikushx.com');   
}   

/* Functions used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}

?>