<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$mailFrom = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$mailTo = "viveksohal92@yahoo.com";
		$headers = "From: " . $mailFrom;
		$txt = "You have received an e-mail from " . $name. "\n\n" / $message;
		mail($mailTo,$subject,$txt,$headers);
		header("Location: index.php?mailsent");
	}
?>