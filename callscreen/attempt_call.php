<?php 

// Set the numbers to call
$numbers = array("+8180xxxxxxxx", "+8180xxxxxxxx", "+8180xxxxxxxx");
$number_index = isset($_REQUEST['number_index']) ? $_REQUEST['number_index'] : "0";
$DialCallStatus = isset($_REQUEST['DialCallStatus']) ? $_REQUEST['DialCallStatus'] : "";

header("content-type: text/xml"); 

// Check the status of the call and 
// that there is a valid number to call

if($DialCallStatus!="completed" && $number_index<count($numbers)){ 
?>
	<Response>
	<Dial action="attempt_call.php?number_index=<?php echo $number_index+1 ?>">
		<Number url="screen_for_machine.php">
		<?php echo $numbers[$number_index] ?>
		</Number>
	</Dial>
	</Response>
<?php
} else {
?>
	<Response>
		<Hangup/>
	</Response>
<?php
}
?>
