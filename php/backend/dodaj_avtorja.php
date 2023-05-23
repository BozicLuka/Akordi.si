<?php require_once 'povezava.php'; ?>

<?php

	$avtor = $_POST['avtor'];

	if (!isset($_POST['sub']))
	{
		header("Location:../frontend/Prijavljen/izvajalci_prijavljen.php");
		
	}else {
		$sql = "INSERT INTO avtorji() VALUES (NULL, '$avtor');";
		mysqli_query($link, $sql);
		header("Location:../frontend/Prijavljen/izvajalci_prijavljen.php");
	}

?>