<?php
	session_start();
?>
<html>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<head>
<title>Quiz - Homepagina</title>
	<link rel="stylesheet" href="style.css" type="text/css">

<body>
	<div w3-include-html="header.php"></div> 
	<script>
		w3IncludeHTML();
	</script>
	
	<div id="volledig">
		<div id="wrapper">
			<div id="links">
				<p>Hier mini-scorebord</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div id="midden">
				<p>Hier verschillende quiz categorieën</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><p></p>
			</div>
			<div id="rechts">
				<?php 
			if (ISSET($_SESSION['id'])) {
				echo('<p style="text-align:center; font-weight: bold;">'.$_SESSION["voornaam"].'<p>');
			} else {
				echo ('<p style="text-align:center; font-weight: bold;">Welkom op mijn website!</p><p>Op deze site kan jij quizzen van verschillende categorien spelen, houd je progressie bij doormiddel van je level, deze zal stijgen naar gelang dat je speelt.</p>'); 
			}?><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div id="leeg"></div>
		</div>
	</div>
	
	
	<br><div w3-include-html="footer.php"></div> 
</body>
</html>