twilio_sample
=============
【update:2013.8.27】<br>
・sample Name : callscreen<br>
設定されている電話番号の順番に電話をかける。<br>
<br>
□ attempt_call.php<br>
①複数の電話番号を設定する。<br>
②Twilioの電話番号(050)のRequestURLに「attempt_call.php」のURLを設定。<br>
<br>
・sample Name : clicktocall<br>
匿名通話のサンプルで画面上の入力フォムにそれぞれ違う電話番号を入力する。<br>
それぞれに電話を掛ける際の発信者番号は050で表示される。<br>
<br>
□ makecall.php<br>
①Twilio ライブラリをimportする。<br>
②アカウント情報や発信用電話番号を設定。<br>

【update:2013.9.25】<br>
・sample Name : Twilio Poll System<br>
画面に表示されている電話番号に電話をかけて番号を入力すると画面の数字が変わる投票システム。<br>

□ 実行方法
このサンプルを動かすためにはDBが必要です。（このサンプルはMySQL）<br>
カーラムは電話番号と入力値用二つだけです。<br>
サンプルコードをダウンロードし、DBと繋げばすぐお使いになれます。<br>
<br>
□ Twilioの設定について<br>
このサンプルコードはユーザーが仮面に表示されているTwilioの電話番号に電話をかける仕組み、つまりTwilioからはインバウンドである。<br>
電話番号に下記の設定を行う。<br>
Twilio管理画面にログイン→電話番号→この投票システムで使う電話番号を選択→「Voice Request URL」に「poll-an.php」のURL設定。<br>
<br>
□ poll-an.php<br>
050-xxxx-yyyyに電話がかかってくると一番最初に呼ばれるファイル<br>
<br>
□ process_poll.php<br>
ユーザーが入力した値（番号）をDBに格納する。<br>
<br>
□ twilio-poll.php<br>
DBから値（ユーザーから入力された番号）を取得し、画面に表示する。<br>
<br>
□ 最後に<br>
このサンプルコードを応用すれば電話番号による制限、投票項目の増設など電話によるアンケートや投票システムを構築することが可能です。
