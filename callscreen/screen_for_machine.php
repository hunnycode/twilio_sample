<?php header("content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
	<Gather action="complete_call.php">
		<Say>Press any key to accept this call</Say>
	</Gather>
	<Hangup/>
</Response>
