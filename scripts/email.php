
<?php
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$subject = wordwrap($subject, 80);
	$content = wordwrap($content, 80);
	// mail("Tansselfportraitstudio@gmail.com", $subject, $content);
	echo "Email success." 
	// note, this gets caught by no_redirect at the submitForm function
?>
