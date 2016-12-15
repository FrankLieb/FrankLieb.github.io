<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<link rel="stylesheet" href="stylelogin.css" type="text/css">
<head>
<title>Login</title>
</head>

<body>
<div w3-include-html="header.php"></div> 
<script>
w3IncludeHTML();
</script>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="includes/Signin.php" method="post">
      <INPUT type="text" name="uid" placeholder="Gebruikersnaam" required>
      <INPUT type="password" name="pwd" placeholder="Passwoord" required>
      <button type="submit">login</button>
      <p class="message">Nog geen account? <a href="registreer.php">Registreer een account</a></p>
    </form>
  </div>
</div>

<!-- <form action="signin.php" method="post" class="loginform">
	<label for="uid">Gebruikersnaam</label><INPUT type="text" name="uid" placeholder="Gebruikersnaam" required style="float:right"><br><br>
	<label for="pwd">Wachtwoord</label><INPUT type="password" name="pwd" placeholder="Passwoord" required style="float:right"><br>
	<button type="submit">Login</button><br>
	<a href="registreer.php" style="float:right; font-size:12px;">Nog geen account? Klik hier.</a>
</form> -->



<!-- Overzicht:
dbh.php: Databasehandler, maakt de verbinding met de database
Footer.php: Onder aan elke pagina, om iets te weergeven
Header.php: Boven aan elke pagina, om het ;enu te weergeven
Home.php: Homepagina
Login.php: Het loginscherm
Registreer.php: Het registreer scherm
Signup.php: Het script dat je account aanmaakt
Signin.php: Het script dat je inlogt
-->
<br>
<div w3-include-html="footer.php"></div> 

</body>
</html> 