<?php
	$title = "Contact Breath Diagnostics, Inc.";
	require 'includes/header.php';

function fnSanitizeStringr($str) // letters and space only for name
{
	return preg_replace('/[^A-Za-z\s ]/', '', $str);
}

function fnSanitizeComments($str) // only 'String' is allowed eg. '<br>HELLO</br>' => 'HELLO'
{
	return filter_var($str, FILTER_SANITIZE_STRIPPED); 
}

function fnValidateEmail($email) // Validates email address
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function fnSanitizeEmaill($url) // Sanitizes email
{
  return filter_var($url, FILTER_SANITIZE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') { // Checks for post method
	echo "<br><br><br><h4 class=\"bright\">You have reached this page by mistake.</h4>";
	echo '<a href="/">http://www.breathdiagnosticsinc.junebowman.com</a><br><br><br>';
	require_once 'includes/footer.php';
	die();
}

if (isset($_POST['submitted'])) {
	//Check for valid email address
	$email = $_POST["email"];
	$email = fnValidateEmail($email);
	if(empty($email)){
		echo '<h4 class="bright">You did not enter a valid email address.<br><br>
		Use your browser\'s back button and enter a valid email address.</h4>';
		require 'includes/footer.php';
		die();	
	} else {
		// Sanitize email further
		$email = fnSanitizeEmaill($email);
	}

	if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comments"]) ) {
		$name = $_POST['name'];
		$name = fnSanitizeStringr($name);
		echo "<p>Thank you, $name.</p><p>We will get back with you as soon as possible.</p><p>Have a great day!</p>";
		$comments = $_POST["comments"];
		$comments = fnSanitizeComments($comments);
		$comments = stripslashes($comments);
		//$comments = htmlspecialchars_decode($comments);
		
	
$to = "juneb67@gmail.com";
$subject = "Breath Diagnostics, Inc. Contact Form Submission";

$message = "
<html>
<head>
<title>Breath Diagnostics, Inc. Contact Form Submission</title>
</head>
<body>
<p>This contact form was submitted through the website.</p>
<p>Name: $name:</p>
<p>Email: $email</p>
<p>Comments: $comments</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
		
		
		
		
		
		
		
		
		

		
	} else {
		echo '<h4 class="bright">All fields are required. User your browser\'s back button and fill in all information.</h4>';
		require 'includes/footer.php';
		die();
	}
}

/* Send the email
$to = 'juneb67@gmail.com';
$subject = 'Breath Diagnostics, Inc. Contact Form Submission';
$message = $comments;
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

*/





	require 'includes/footer.php';

?>
    
