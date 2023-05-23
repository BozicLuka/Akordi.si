<?php
    session_start();
    session_destroy();
    header("Location:../frontend/zacetna.php");
?>
