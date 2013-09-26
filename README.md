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

【update:2013.9.13】<br>
・sample Name : Questionnaire<br>
画面に表示されている電話番号に電話をかけて番号を入力すると画面の数字が変わる投票システム。<br>

□ このサンプルを動かすためにはDBが必要です。（このサンプルはMySQL）<br>
・必要なカーラムは電話番号と入力値用二つだけです。<br>
・サンプルコードをダウンロードし、DBと繋げばすぐお使いになれます。<br>
※ DBの構築が面倒な方はファイル I/Oで良いかと思います。<br>
<br>
□ Twilioの設定について<br>
このサンプルコードはユーザーが仮面に表示されているTwilioの電話番号に電話をかける仕組み、<br>つまりTwilioからはインバウンドである。<br>
Twilioの電話番号に下記の設定を行う。<br>
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

【update:2013.9.26】<br>
・sample Name : twilio_call<br>
IVRによる電話の転送や音声ファイルの再生ができるサンプルコードです。<br>
□ index.php<br>
画面ファイルです。「匿名通話」タブを選択すると二つの電話番号入力欄と音声ファイル選択欄が表示されます。<br>
画面の「call」ボタンより電話をかけます。<br>
□ Call.php<br>
このファイルが「twiml」です。Twilioの動詞より電話の処理を実行します。<br>
□ twilioCall.php<br>
Twilioが呼び出されます。<br>
□ 最後に<br>
各ソースファイルの経路を設定してください。基本「your」で検索すると設定部分が検索されます。<br>
特に音声ファイルの経路は何も設定されておりませんのでご注意ください。<br>

