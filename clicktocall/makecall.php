<?php
require "../Services/Twilio.php";

/* Set our Twilio AccountSid and AuthToken */
$AccountSid = "Your Twilio AccountSid";
$AuthToken = "Your Twilio AuthToken";

/* 発信番号を入力します。Twilioアカウントに登録されている電話番号 */
$from= '+8150xxxxyyyy';

/* 発信先電話番号 */
$to= $_REQUEST['to_called'];

/* 転送先電話番号 */
$to_sent = $_REQUEST['called'];

/* TwiML(callback.php)が格納されているフォルダをサーバーのURLを指定*/
$url = 'http://hello.twilio.jp/clicktocall/';

$client = new Services_Twilio($AccountSid, $AuthToken);

if (!isset($_REQUEST['called'])) {
    $err = urlencode("Must specify your phone number");
    header("Location: index.php?msg=$err");
    die;
}

/* Twilioを利用してアウットバウンドコールを作ります。 */
$call = $client->account->calls->create($from, $to, $url . 'callback.php?number=' . $_REQUEST['called']);

/* ページにCallSIDを表示させる */
$msg = urlencode("Connecting... ".$call->sid);
header("Location: index.php?msg=$msg");
?>
