<?php require_once 'povezava.php'; session_start()?>

<?php

    $uporabnik_id = $_POST['id'];

    $sql = "DELETE FROM uporabniki WHERE(id=$uporabnik_id);";
    mysqli_query($link, $sql);
    header('Location:../frontend/Prijavljen/admin.php');        

?>