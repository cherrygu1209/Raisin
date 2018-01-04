<?php
if (isset($_POST['inputName'])) {
	$name = strip_tags($_POST['inputName']);
	$email = strip_tags($_POST['inputAmount']);
	$message = strip_tags($_POST['inputMessage']);
	echo "<strong>Name</strong>: ".$name."</br>"; 
	echo "<strong>Email</strong>: ".$email."</br>"; 
	echo "<strong>Message</strong>: ".$message."</br>"; 
	echo "<span class='label label-info'>Your feedback has been submitted with above details!</span>";
}
?>