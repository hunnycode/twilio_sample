<?php
	require("Services/Twilio.php");

	$in_tel_to = substr_replace($_POST['in_tel_to'], "+81", 0,1);
	$out_tel_to = substr_replace($_POST['out_tel_to'], "+81", 0,1);
	$sound_list = $_POST['soundList'];
	
	$ACCOUNT_SID = "your Twilio Account SID"; // Your Twilio account sid
	$AUTH_TOKEN = "your Twilio Auth Token"; // Your Twilio auth token

	$client = new Services_Twilio($ACCOUNT_SID, $AUTH_TOKEN);
		$call = $client->account->calls->create(
			'your Twilio Phone Number', // From a Twilio number in your account
			$in_tel_to, // Call any number
			'http://your web server URL/twilio_call/Call.php?out_tel_to='.$out_tel_to.'&sound_list='.$sound_list
		);
?>