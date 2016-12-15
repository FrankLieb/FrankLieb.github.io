<?php
	session_start();
?>
<?php

include '../dbh.php';

$first = $_POST['voornaam'];
$last = $_POST['achternaam'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = md5($_POST['pwd']);

if (empty($first)) {
	header("Location: ../Registreer.php?error=empty");
	exit();
} 
if (empty($last)) {
	header("Location: ../Registreer.php?error=empty");
	exit();
} 
if (empty($email)) {
	header("Location: ../Registreer.php?error=empty");
	exit();
} 
if (empty($uid)) {
	header("Location: ../Registreer.php?error=empty");
	exit();
} 
if (empty($pwd)) {
	header("Location: ../Registreer.php?error=empty");
	exit();
} 
else {
	$sql = "SELECT uid FROM gebruiker WHERE uid='$uid'"; //* Om te checken of de gebruikersnaam (UID) al is geregistreerd
	$result = mysqli_query($conn,$sql);
	$uidcheck = mysqli_num_rows($result);
	
	if ($uidcheck > 0) {
		header("Location: ../Registreer.php?error=username");
		exit();
	} else {
	$sql = "INSERT INTO gebruiker (first,last,uid,pwd,email) 
	VALUES ('$first','$last','$uid','$pwd','$email')";
	$result = mysqli_query($conn,$sql);

	header("Location: ../Home.php");
	}
}



?>