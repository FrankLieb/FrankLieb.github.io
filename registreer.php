<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<link rel="stylesheet" href="stylelogin.css" type="text/css">
<head>
<title>Registreer</title>
</head>

<body>
<div w3-include-html="header.php"></div> 
<script>
w3IncludeHTML();
</script>



<!--<form action="signup.php" method="post">
	Voornaam:<INPUT type="text" name="voornaam" placeholder="Voornaam" required><br>
	Achternaam:<INPUT type="text" name="achternaam" placeholder="Achternaam" required><br>
	Gebruikersnaam:<INPUT type="text" name="uid" placeholder="Gebruikersnaam" required><br>
	Wachtwoord:<INPUT type="password" name="pwd" placeholder="Passwoord" required><br>
	<button type="submit">Registreer</button> -->

</form>

<div class="registreer-page">
  <div class="form">
    <form class="login-form" action="includes/Signup.php" method="post">
	<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
	if (strpos($url, 'error=empty') !== false){ //* Als 'error=empty' in de url is word dit uitgevoerd
		echo("Vul alle velden in!"); //*Als zekerheid, indien de "required" manueel word verwijderd sinds dat het Client sided is
	};
	if (strpos($url, 'error=username') !== false){ //* Als 'error=username' in de url is word dit uitgevoerd
		echo("De gebruikersnaam is al reeds in gebruik!"); //*Als zekerheid, indien de username al reeds in gebruik is
	};?>
	<INPUT type="text" name="uid" placeholder="Gebruikersnaam" required><br>
    <INPUT type="text" name="voornaam" placeholder="Voornaam" required><br>
	<INPUT type="text" name="achternaam" placeholder="Achternaam" required><br>
	<INPUT type="text" name="email" placeholder="E-mail adres" required><br>
	<INPUT type="password" name="pwd" placeholder="Password" required><br> <!-- Standaardtaal in het hele taalgebied is wachtwoord. Standaardtaal in België is daarnaast paswoord, standaardtaal in Nederland is password. -->
      <button type="submit">Registreer</button>
      <p class="message">Al een account? <a href="login.php">Login</a></p>
    </form>
  </div>
</div>





<br><br>
<div w3-include-html="footer.php"></div> 

</body>
</html> 