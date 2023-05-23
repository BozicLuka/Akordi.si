<?php require_once 'povezava.php'; ?>
<?php
	$geslo = hash("sha256", $_POST['geslo']);
	$id = $_SESSION['id'];

	if (!isset($_POST['sub']))
	{
		header("Location:../frontend/Prijavljen/racun.php");
	}else {
		$sql = "UPDATE uporabniki SET (geslo='$geslo') WHERE (id=$id);";
		mysqli_query($link, $sql);
		header("Location:../frontend/prijava.php");
	}
?>