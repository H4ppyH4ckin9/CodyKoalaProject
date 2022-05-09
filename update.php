<?php
session_start();
require_once('dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$log=false;

if(isset($_SESSION["id"])){
    $id=$_SESSION["id"];
    $lvl=$_POST["levelUp"];
    $log=true;
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
	
	<div class="container">
		<p><?php if($log==true){
				$sql = "UPDATE `user` SET `level` = '$lvl' WHERE `id` = '$id';";
				$db_obj->query($sql);
                echo "Spielstand gespeichert!";
				
            }else{
                echo "Fehler! Bitte einloggen um Spielstand zu speichern!";
            }?></p>
	</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>