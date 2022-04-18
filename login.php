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
							<p style="text-align:center;">Hier kannst du dich einloggen um dein Abenteuer fortzusetzen!</p>
								<div class="floating-label-wrap" id="loginform">
									<label for="bname" class="floating-label">Benutzername</label>
									<br>
						  			<input type="text" class="floating-label-field floating-label-field--s3" id="bname" placeholder="Benutzername">	
						  			<br>
						  			<label for="psw" class="floating-label">Passwort</label>
						  			<br>
						  			<input type="password" class="floating-label-field floating-label-field--s3" id="psw" placeholder="Passwort">
						  			<br>
						  			<button type="submit" class="btn btn-warning" id="loginButton">Abenteuer fortsetzen!</button>
				  				</div>
		  					<div class="col-4"></div>
		  				</div>
  					</div>
			</div>
	</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>