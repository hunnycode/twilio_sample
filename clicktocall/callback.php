<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say language="ja-jp">画面の転送先電話番号に電話をかけます。</Say>
    <Dial callerId="+8150xxxxyyyy"><?php echo $_REQUEST['number']?></Dial>
</Response>
