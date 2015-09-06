<?php
  require 'Services/Twilio.php';

  mysql_connect('DB URL', 'account ID', 'account PWD') or die(mysql_error());
  mysql_select_db('DB NAME') or die(mysql_error());

  $pollTelNo = str_replace("+", "", $_GET['pollTelNo']);
  $pollDigits = $_REQUEST['Digits'];
  $demo_name = "poll";

  $sql_str="INSERT INTO demo_applications(demo_name, val_one, val_two) VALUES ('$demo_name','$pollTelNo','$pollDigits')";
  $say_str="番を選択しました。画面を確認してください。ありがとうございました。";

  switch ($pollDigits) {
    case 1:
      $sql = $sql_str;
      mysql_query($sql);
      $say = $pollDigits.$say_str;
    break;
    case 2:
      $sql = $sql_str;
      mysql_query($sql);
      $say = $pollDigits.$say_str;
    break;
    case 3:
      $sql = $sql_str;
      mysql_query($sql);
      $say = $pollDigits.$say_str;
    break;
    default:
      $say = '作品番号は1から3までです。番号を確認してかけなおしてください。';
    break;
  }

  $response = new Services_Twilio_Twiml();
  $response->say($say, array('language' => 'ja-jp'));
  $response->hangup();
  header("Content-type: text/xml");
  print $response;
