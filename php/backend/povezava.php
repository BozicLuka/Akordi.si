<?php
    $servername = "...."; //host
    $username = "...."; //user
    $password = "....";
    $database = "....";

    $link = mysqli_connect($servername, $username, $password) or die("Ne morem se povezati na streznik");

    mysqli_select_db($link, $database) or die("Ne morem se povezati na bazo");
?>
