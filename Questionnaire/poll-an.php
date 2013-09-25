<?php
	require 'Services/Twilio.php';
	
	$response = new Services_Twilio_Twiml();
	$pollTelNo = $_POST['From'];
	
	$gather = $response->gather(array(
		'action' => 'http://your server URL/Questionnaire/process_poll.php?pollTelNo='.$pollTelNo,
		'method' => 'GET',
		'timeout' => '30',
		'numDigits' => '1'
	));
	$gather->say("Twilioアンケートへようこそ。画面に表示されている作品番号を1から3の数字ボタンをおしてください。", array('language' => 'ja-jp'));
	
	header("Content-type: text/xml");
	print $response;
?>