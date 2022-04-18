<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
  <a class="navbar-brand" href="index.php" ><img src="Cody_Icon.png" alt="index.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php
      if(isset($_SESSION["username"])){
        echo'<a class="navbar-brand nav-link active" href="logout.php" id="NavbarItemColor">Log-Out</a>';
      }else{
        echo'<a class="navbar-brand nav-link active" href="login.php" id="NavbarItemColor">Log-In</a>';
        echo'<a class="navbar-brand nav-link active" href="signup.php" id="NavbarItemColor">Sign-Up</a>';
      }
      ?>
      <a class="navbar-brand nav-link active" href="impressum.php" id="NavbarItemColor">Impressum</a>
      <?php
      if(isset($_SESSION["username"])){
        echo'<a class="navbar-brand nav-link active" id="NavbarItemColor">Hallo AbenteurerIn '.$_SESSION["name"].'!</a>';
      }
      ?>
     
    </div>
  </div>
</nav>