<?php
session_start();
require_once('dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$logCheck=false;

function test_input($data) {         //validateInput
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
  $username=test_input($_POST["bname"]);
  $password=test_input($_POST["psw"]);
  $password=hash('sha256',$password);

  $sql="SELECT `id`,`name`,`username`,`password`,`level` FROM `user` WHERE `username`= '$username';";
  $result=$db_obj->query($sql);


  if($result->num_rows>0){
	  $resultArray=$result->fetch_array();
	  if($resultArray['username']==$username && $resultArray['password']==$password){
		$logCheck=true;
		$_SESSION["id"] = $resultArray['id'];
		$_SESSION["name"]=$resultArray['name'];
		$_SESSION["username"]=$resultArray['username'];
		$_SESSION["level"]=$resultArray['level'];
	  }
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
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
<body>
	<?php include 'navbar.php';?>
	<audio src="backgroundMusic.mp3" type="audio/mp3"></audio>
	
		<div class="row">
				<div class="col-4"></div>
					<div class="col-4">
						<div class="container" id="login">
							<h1>Login</h1>
							<?php
							if($logCheck==true){
								echo '<p style="text-align:center;">Willkommen zurück '.$_SESSION["name"].'!</p>';
							}else{
								echo '<p style="text-align:center;">Login Daten falsch!</p>';
							}
							?>
								<div class="floating-label-wrap" id="loginform">
				  				</div>
		  					<div class="col-4"></div>
		  				</div>
  					</div>
			</div>
	</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>