<!Doctype html>
<html>
<head>
	<title>Proiect SM</title>
	<link rel="stylesheet" href="../css/style.css">
	<?php 
	$output=null;
	$retval=null;
	if (array_key_exists('play', $_POST))
		play();
	if (array_key_exists('stop', $_POST))
		stop();
	function play() {
		$command = "/var/www/html/proiect_sm/play music/".$_POST["melodie"].".mp3";
		exec("$command > /dev/null 2>/dev/null &");
	}
	function stop() {
		exec('pidof mpg123', $output, $retval);
		exec("/var/www/html/proiect_sm/stop $output[0]");
	}
	?>
</head>
<body>
	<div class="content">
		<h3 class="anunt"> Selecteaza o melodie</h3>
		<form method="post" class="input">
			<input type="text" name="melodie">
			<input type="submit" name="play" value="play">
			<input type="submit" name="stop" value="stop">
		</form>
		<div class="lista">
		<h4>Lista cu melodii:</h4>
		<?php
		$fileList = glob ('music/*');
		foreach($fileList as $filename)
		{	if (is_file($filename))
			{	$filename = str_replace (".mp3","",$filename);
				$filename = str_replace ("music/","",$filename);
				echo $filename, '<br>';
			}
		}
		?>
		</div>
	</div>

</body>
</html>
