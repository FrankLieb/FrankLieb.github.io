<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
<head>
<title>Scorebord</title>
</head>

<body>
<div w3-include-html="header.php"></div> 
<script>
w3IncludeHTML();
</script>
<?php
			if (ISSET($_SESSION['id'])) {
				echo("
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				");
			} else {
				echo ('<div id="volledig">
					<div id="wrapper">
						<div id="links">
							<p></p><br><br>
						</div>
						<div id="midden">
							<h1>Helaas, je moet ingelogt zijn om dit te bekijken.</h1><br>
						</div>
						<div id="rechts">
							<p></p><br><br>
						</div>
						<div id="leeg"></div>
					</div>
				</div>'); 
			}
			?>




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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div w3-include-html="footer.php"></div> 

</body>
</html> 