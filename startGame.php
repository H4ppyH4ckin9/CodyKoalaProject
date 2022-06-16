<?php
session_start();
$level;
if(isset($_SESSION['level'])){
	$level=$_SESSION['level'];
}else{
	$level=0;
}

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
	<embed src="backgroundMusic.mp3" loop="true" autostart="true" width="2" height="0">

	<div class="container" id="gameStateButtons">
		<div class="col-md-3 text-center w3-container w3-center w3-animate-top row justify-content-start center" id="headingtime">
			<form name="update" action="update.php" method="POST">
				<label for="levelUp" class="floating-label"></label>
				<input type="hidden" id="level" name="levelUp" value=" <?=$level; ?> ">
				<button type="submit" class="btn btn-warning" id="updateButton" style="margin-top: 30px; text-align: center; width: 270px;" >Fortschritt Speichern!</button>
			</form>

		<a href="reset.php" style="margin-bottom: 30px; text-align: center;" class="btn btn-warning" id="resetButton">Spielstand zurücksetzen!</a>
		</div>
	</div>



	<div id="gameElements" class="col"><div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="game.js"></script>

  </body>
</html>

