<?php require_once 'povezava.php'; ?>
<?php

	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	$uporabnisko_ime = $_POST['uporabnisko_ime'];
	$mail = $_POST['email'];
	$geslo = hash("sha256", $_POST['geslo']);

	if (!isset($_POST['sub']))
	{
		header("Location:../frontend/registracija.php");
		
	}else {

		$sql = "INSERT INTO uporabniki() VALUES (NULL, '$ime', '$mail', '$uporabnisko_ime', '$geslo', '$priimek', 0);";
		mysqli_query($link, $sql);
		header("Location:../frontend/prijava.php");
	}

?>