<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
<!-- 	
	#eeedf0 	(238,237,240)
	#b1c7d6 	(177,199,214)
	#4da1bd 	(77,161,189)
	#154f69 	(21,79,105)
	#001024 	(0,16,36)
-->
header {
		width: 1200px;
		max-width: 80%
		margin:auto;
		/*background-color: yellow;*/
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #154f69;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #58a7c1;
}
li.active {
	background-color: #4da1bd;
}
li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;	
}
#login {
	float: right;
}

@media screen and (max-width: 650px) { 			<!-- Mobiel / Klein scherm -->
header {
		width: 650px;
		max-width: 80%
		margin:auto;
}
ul {
    list-style-type: none;
    margin: -10;
    overflow: hidden;
    background-color: #154f69;
}

li {
    float: left;
	font-size: 10px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;	
}
#login {
	float: left;
}
ul {
	width: 100%;
}
header {
	width: 97%;
}
}
</style>
</head>
<body>
	<header>
		<ul>
			<li><a href="Home.php" class="active"> <img src="images/icons/home.png" alt="Home" style="width:12px;height:12px;"> Homepagina</a></li>
			<li><a href="Scoreboard.php"> <img src="images/icons/score.png" alt="Scoreboard" style="width:12px;height:12px;"> Scorebord</a></li>
			<li><a href="Groups.php"> <img src="images/icons/group.png" alt="Groups" style="width:12px;height:12px;"> Groepen</a></li>
			<li><a href="Statistics.php"> <img src="images/icons/stats.png" alt="Statistics" style="width:12px;height:12px;"> Jouw statistieken</a></li>
			<?php
			if (ISSET($_SESSION['id'])) {
				echo('<li style="float:right" class="dropdown"><a href="gebruikerinstellingen.php" class="dropbtn"><img src="images/icons/login.png" alt="Login" style="width:12px;height:12px;"> Welkom '. $_SESSION["voornaam"] .'</a><div class="dropdown-content"><a href="includes/Logout.php">Uitloggen</a></div></li>');
			} else {
				echo ('<li id="login"><a href="login.php"> <img src="images/icons/login.png" alt="Login" style="width:12px;height:12px;"> Login</a></li>'); 
			}
			?>
		</ul>
		<br><br>
	</header>


</body>
</html> 