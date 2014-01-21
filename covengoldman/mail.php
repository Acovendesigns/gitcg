<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/main.css">
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$subject = $_POST['subject'];
(isset($_POST["subject"])) ? $subject = $_POST["subject"] : $subject=1; 
/*
$email = $_POST['email'];
$website = $_POST['website'];
*/
$message = $_POST['message'];
$formcontent=" FROM - $name \n \r \n ORGANIZATION - $company \n \r \n SUBJECT - $subject \n \r \n MESSAGE - $message";
$recipient = "acovendesigns@gmail.com";
$subject = "New Message from $name \r \n";
$mailheader = "From: $email \r\n";
$headers .= 'CC: $email';
$body .= 'Subject: ' . $subject . "\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
/*echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";*/
?>

<html>
<body>
<div class="successcontainer">
<div class="success">
	<a class="animated fadeInDown"href="index.html#home"><img src="img/logo.png"></a>
	<h1 style="font-size:50px; margin-top:15px;">THANK YOU</h1>
	<h5 style="font-size:14.5px;"> your message has been sent </h5>

</div>
</div>
</body>
</html>	

