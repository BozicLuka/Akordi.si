<?php require_once 'povezava.php'; ?>

<?php

	$avtor = $_POST['avtor'];
	$naslov = $_POST['naslov'];
	$akordi = $_POST['akordi'];

	if (!isset($_POST['sub']))
	{
		header("Location:../frontend/Prijavljen/noviAkordi_prijavljen.php");
		
	}else {
		$sql = "INSERT INTO akordi() VALUES (NULL, '$naslov', '$akordi', 'neki', (SELECT id FROM avtorji WHERE ime='$avtor'));";
		mysqli_query($link, $sql);
		header("Location:../frontend/Prijavljen/noviAkordi_prijavljen.php");
	}

?>