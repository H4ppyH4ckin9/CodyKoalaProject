<?php
session_start();
?>
<html>
	<head>
		<title>Cody der Koalabär</title>

			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" href="style.css" />
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="icon" href="Cody_Icon.png">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
<body>
	<?php include 'navbar.php';?>
	<audio src="backgroundMusic.mp3" type="audio/mp3"></audio>
	<div class="container" id="intro">

		<div class="w3-container w3-center w3-animate-top" id="headingtime">
			<h1>Cody der Koalabär</h1>
		</div>
		
		<p>Hallo! Was für ein schöner Zufall, dass du bei uns gelandet bist! Du hast vielleicht schon viel mit Computern zutun, auf jeden Fall sitzt du schon vor einem! 
			Computer gibt es nicht nur bei dir, sondern diese sind auch im Dschungel angekommen.</p>
		<p>Nun bist du gefragt, Abenteurer. Einer unserer Dschungel-Freunde, Cody, möchte dich kennen lernen!
			Cody benötigt deine Hilfe! Cody, hat auf der Suche nach Futter einen Roboter gefunden, welcher genau wie er ausschaut. 
			Ein Koala-Bär! Doch eins macht Cody sehr traurig, zurzeit bewegt sich der Roboter und spricht nicht…</p>
		<p>Kannst du Cody helfen, seinem Freund das Laufen, Sprechen und vieles Mehr beizubringen	?</p>
		<div class="col-md-12 text-center">
			<button type="button" class="btn btn-warning" style="margin-bottom: 30px; text-align: center;" onclick="window.location.href = 'startGame.php';">JA, ich will das Abenteuer starten!</button>
		</div>
	</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
