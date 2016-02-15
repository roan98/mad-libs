<?php
//var_dump($_POST);

?>
<!DOCTYPE html>
<html>
<head>
<link href="story.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="mad.png">
	<title>Mad Libs</title>
</head>
<body>
	<div class="container">
		<h1><img src="madlibs.png" height="165px" width="500px"></h1>
			<ul>
				<a href="http://roanvanadrichem.dvc-icta.nl/php.php"><li>Er heerst paniek...</li></a>
				<a href="http://roanvanadrichem.dvc-icta.nl/onkunde.php"><li>Onkunde</li></a>
			</ul>
	
		<div class="content">
		<h2>er heerst paniek</h2>
			<p>Er heerst paniek in het koninkrijk <?=$_POST['land']?> . Koning <?=$_POST['docent']?> is ten einde raad en als koning <?=$_POST['docent']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$_POST['persoon']?> .</p>
			<p>"<?=$_POST['persoon']?> ! Het is een ramp! het is een schande!"</p>
			<p>"Sire, majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?=$_POST['huisdier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_POST['speelgoed']?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?=$_POST['huisdier']?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_POST['bezigheid']?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?=$_POST['geld']?> voor gebruiken?"</p>
			<p>"<?=$_POST['persoon']?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had?"</p>
			<p>"<?=$_POST['vervelen']?>, Sire."</p>
		</div>
	</div>
</body>
</html>

