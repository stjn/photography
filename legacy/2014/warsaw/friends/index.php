<?php 
	setcookie('PrivateAccess', 'true', time()+60, '/');
	header("Location: ../");
	exit();
?>