<?php ?>
<htmL>
<head>
  <title>Twilio Sample</title>
</head>
<body>
  <h1>Twilio匿名通話サンプル</h1>
<?php
  if(isset($_REQUEST['msg'])) {
    echo '<i>' . $_REQUEST['msg'] . '</i>';
  }
?>

  <h3>転送先の電話番号を入力してください。</h3>
  <form action="makecall.php" method="post">
    <span>発信先電話番号: <input type="text" name="to_called" /></span><br />
    <span>転送先電話番号: <input type="text" name="called" /></span><br />
    <input type="submit" value="Connect me!" />
  </form>
</body>
</html>
