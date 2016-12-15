<?php
	session_start();
?>
<?php
//* Deze logt je in*//
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = md5($_POST['pwd']);

$sql = "SELECT * FROM gebruiker WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn,$sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Het opgegeven wachtwoord of de gebruikersnaam is incorrect!";
} else {
	$_SESSION['id'] = $row['id'];
	$_SESSION['gebruikersnaam'] = $row['uid'];
	$_SESSION['voornaam'] = $row['first'];
	header("Location: ../Home.php");
}
?>