<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8"/>
    <title>Twilio 匿名通話</title>
    <link rel="stylesheet" href="css/bootstrap.min.welcome.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
    <script src="script/bootstrap-tab.js"></script>
    <script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>

    <script type="text/javascript">
      $(function() {
        $('#callBtn').one('click', function() {
          $('#call').submit(function() {
            var in_tel_to = $("#in_tel_to").val();
            var out_tel_to = $("#out_tel_to").val();
            var soundList = $("#soundList").val();
            var action = $("#action").val();
            $.ajax({
              type: "POST",
              url: 'twilioCall.php',
              data: {
                "in_tel_to":in_tel_to,
                "out_tel_to":out_tel_to,
                "soundList":soundList,
                "action":action,
              },

              success: function(data, dataType) {
                alert("架電成功");
              },

              error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert('Error : ' + errorThrown);
              }
            });
            //サブミット後、ページをリロードしないようにする
            return false;
          });
        });
      });
    </script>
 </head>
  <body>
    <div class="container">
      <table width="100%">
        <tbody>
          <tr>
            <td>
              <center><img src="image/logo/twilio-kwc-large.jpg" /></center>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="tabbable">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab"><img src="image/logo/twilio_logo_very_small-20.jpg"></a></li>
          <li><a href="#call" data-toggle="tab">匿名通話</a></li>
        </ul>
      <div class="tab-content">
      <div class="tab-pane active" id="home">
        <section id="home">
          <div align="left"><br />
            <p><font size="10"><b>クラウド電話API twilio</b></font></p>
            Twilio for KDDI Web Communications公式ページ<br />
            <a href="http://twilio.kddi-web.com">Twilio for KDDI Web Communications</a><br />
            Twilio for KDDI Web Communications Facebookページ<br />
            <a href="https://www.facebook.com/TwilioforKWC">Twilio for KDDI Web Communications Facebook</a>
          </div>
          <br />
        </section>
      </div>
      <div class="tab-pane" id="call">
        <section id="call">
          <form class="form-horizontal" id="call" name="call">
            <div class="row">
              <div class="span7">
                <table>
                  <tr>
                    <td>
                      <div class="control-group success">
                        <label class="control-label" for="inputSuccess"><font color="black">発信先電話番号</font></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="in_tel_to" name="in_tel_to" />
                        </div>
                      </div>
                      <div class="control-group success">
                        <label class="control-label" for="inputSuccess"><font color="black">受信先電話番号</font></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="out_tel_to" name="out_tel_to" />
                        </div>
                      </div>
                    </td>
                    <td valign="top">
                      <div class="span3">
                        <fieldset>
                          <div class="control-group">
                            <label class="control-label" for="select01">ファイル</label>
                            <div class="controls">
<?php
  $dir = "your sound file Path";
  echo "<select name='soundList' id='soundList'>";
  if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
      while (($file = readdir($dh)) !== false) {
        $extension = substr(strrchr($file, '.'), 1);;
        if ($file != "." && $file != ".." && $extension != "txt") {
          $fileStr = str_replace(".mp3","",$file);
          echo "<option value='$fileStr'>$fileStr</option>";
        }
      }
      closedir($dh);
    }
  }
  echo "</select>";
?>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </td>
                  </tr>
                </table>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" class="btn btn-large btn-danger" id="callBtn" name="callBtn" value="Call" />
                    </div>
                  </div>
                  </div>
                  <div class="span5">
                    <div class="result"></div>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
