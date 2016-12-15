<?php
	session_start();
	session_destroy();
	header("Location: ../Home.php");
?>
//* Deze logt je uit*//