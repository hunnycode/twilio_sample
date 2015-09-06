<?php
  $out_tel_to = $_GET['out_tel_to'];
  $sound_list = $_GET['sound_list'];
  $sound_url = "your sound file Path/".$sound_list.".mp3";

  header("content-type: text/xml");
?>
<Response>
<?PHP if (empty($_POST["Digits"])): ?>
  <Say language="ja-jp">
    Twilioへようこそ。電話の転送は1を、音声ファイルの再生は2を、終了は3を押してください。
  </Say>
  <Gather numDigits="1" timeout="30" />
<?PHP elseif ($_POST["Digits"] == "1"): ?>
  <Dial callerId="your Twilio Phone number"><?php echo $out_tel_to ?></Dial>
  <Gather numDigits="1" timeout="30" />
<?PHP elseif ($_POST["Digits"] == "2"): ?>
  <Play><?php echo $sound_url ?></Play>
  <Gather numDigits="1" timeout="30" />
<?PHP elseif ($_POST["Digits"] == "3"): ?>
  <Say language="ja-jp">Twilioのご利用ありがとうございました。</Say>
  <Hangup/>
<?PHP endif ?>
</Response>
