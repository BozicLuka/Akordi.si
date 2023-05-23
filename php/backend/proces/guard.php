<?php
  
    if(isset($_SESSION['uporabnisko_ime'])){
        //dovoljen
    }else{
        header('Location:./../prijava.php');
    }
?>