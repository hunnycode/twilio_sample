<?php
	// Connect to MySQL, and connect to the Database
	mysql_connect('DB URL', 'account ID', 'account PWD') or die(mysql_error());
	mysql_select_db('DB NAME') or die(mysql_error());

	$sql_telNo = "SELECT * FROM demo_applications where demo_name = 'poll'";
	$resultCnt = mysql_query($sql_telNo);

	 $one = 0;
	 $two = 0;
	 $three = 0;

	while ($row = mysql_fetch_array($resultCnt)) {
		if ($row["val_two"] == "1") { $one += 1; } 
		elseif ($row["val_two"] == "2") { $two += 1; } 
		elseif ($row["val_two"] == "3") { $three += 1; } 
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8"/>
    <meta http-equiv="refresh" content="10">
	<title>Twilio POLL</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <script src="script/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<table>
		<tr><th colspan="3"><div class="hero-unit-song-3"><h1>050-xxxx-yyyy</h1></div></th></tr>
		<tr>
			<th><div class="hero-unit-song"><h1>1</h1></div></th>
			<th><div class="hero-unit-song"><h1>2</h1></div></th>
			<th><div class="hero-unit-song"><h1>3</h1></div></th>
		</tr>
		<tr>
			<td><div class="hero-unit-song-2"><h1><?php echo $one; ?><br><font size="8">票</font></h1></div></td>
			<th><div class="hero-unit-song-2"><h1><?php echo $two; ?><br><font size="8">票</font></h1></div></th>
			<th><div class="hero-unit-song-2"><h1><?php echo $three; ?><br><font size="10">票</font></h1></div></th>
		</tr>
	</table>
</div>
</body>
</html>