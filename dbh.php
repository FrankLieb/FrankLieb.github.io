<?php 

$conn = mysqli_connect("localhost","root","","login");

if (!$conn) {
	die("Verbinding fout: ". msqli_connect_error()); //*Verwijder indien online
}
?>