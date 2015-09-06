<?php
  require "../Services/Twilio.php";

  $AccountSid = "Your Twilio AccountSid";
  $AuthToken = "Your Twilio AuthToken";
  $from= '+8150xxxxyyyy';
  $to= $_REQUEST['to_called'];
  $to_sent = $_REQUEST['called'];
  $url = 'http://yourserverURL/clicktocall/';
  $client = new Services_Twilio($AccountSid, $AuthToken);
  if (!isset($_REQUEST['called'])) {
    $err = urlencode("Must specify your phone number");
    header("Location: index.php?msg=$err");
    die;
  }

  $call = $client->account->calls->create($from, $to, $url . 'callback.php?number=' . $_REQUEST['called']);
  $msg = urlencode("Connecting... ".$call->sid);
  header("Location: index.php?msg=$msg");
?>
