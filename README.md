twilio_sample
=============
【update:2013.8.27】<br>
・sample Name : callscreen<br>
設定されている電話番号の順番に電話をかける。<br>
<br>
attempt_call.php<br>
①複数の電話番号を設定する。<br>
②Twilioの電話番号(050)のRequestURLに「attempt_call.php」のURLを設定。<br>
<br>
・sample Name : clicktocall<br>
匿名通話のサンプルで画面上の入力フォムにそれぞれ違う電話番号を入力する。<br>
それぞれに電話を掛ける際の発信者番号は050で表示される。<br>
<br>
makecall.php<br>
①Twilio ライブラリをimportする。<br>
②アカウント情報や発信用電話番号を設定。<br>
