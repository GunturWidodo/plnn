<?php
	session_start();
	unset($_SESSION["admin"]);
	unset($_SESSION["penguji"]);
	unset($_SESSION["login_user"]);
	session_destroy();
	header('location: login.php');
?>	