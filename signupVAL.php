<?php
session_start();
require_once('dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$userAlreadyEx=false;
$pwDouble=false;


function test_input($data) {         //validateInput
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }


$name=test_input($_POST['name']);
$username=test_input($_POST['bname']);
$password=test_input($_POST['psw']);
$passwordWD=test_input($_POST['pswWH']);


if($password==$passwordWD){
	$pwDouble=true;
}

$password=hash('sha256',$password);

$sql="SELECT `username` FROM `user` WHERE `username` = '$username';";
$result=$db_obj->query($sql);

if($result->num_rows!=0){
     $userAlreadyEx=true;
}else{
	if($pwDouble==true){
		$sql="INSERT INTO `user` (`name`, `username`, `password`) VALUES (?, ?, ?);";
		$stmt=$db_obj->prepare($sql);
		$stmt->bind_param("sss", $name, $username, $password);
		$stmt->execute();
	}	
}

$result->close();
$db_obj->close();
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

	
		<div class="row">
				<div class="col-4"></div>
					<div class="col-4">
						<div class="container" id="login">
							<h1>Sign-Up</h1>
							<?php
							if($userAlreadyEx==true){
								echo '<p style="text-align:center;">Benutzername leider schon vorhanden!</p>';
							}elseif ($pwDouble==false) {
								echo '<p style="text-align:center;">Bitte Passwort korrekt wiederholen!</p>';
							}else{
								echo '<p style="text-align:center;">Registrierung war erfolgreich!</p>';
							}
							?>
		  					<div class="col-4"></div>
		  				</div>
  					</div>
			</div>
	</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>