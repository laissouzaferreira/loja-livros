<?php
	@session_start();
	if(!isset($_SESSION["utilizador"])){
		header("Location: index.php");
		exit;
	}

