<?php require_once 'povezava.php'; session_start()?>

<?php

    $pesem_id = $_POST['id'];
    $uporabniski_id = $_SESSION['id'];


    $sql = "INSERT INTO vseckane_pesmi() VALUES (NULL, 'Naslov', $uporabniski_id, $pesem_id);";
    mysqli_query($link, $sql);
    
    header("Location:../frontend/Prijavljen/vseckane_pesmi.php");

?>
