<?php session_start();?>
<?php require_once 'povezava.php';

    $email = $_POST['email'];
    $geslo = $_POST['geslo'];
    $geslo = hash("sha256", $_POST['geslo']);
    echo($email);
    echo($geslo);
    $sql = "SELECT * FROM uporabniki WHERE (email='$email') AND (geslo='$geslo')";

    $result = mysqli_query($link, $sql);

    $row = mysqli_fetch_array($result);

    if($email == 'admin@admin.si' && $geslo == 'e21eeeca819d14fb8de6795ba0216aea80936b002c7c6adb57ce4bdce02da9a9'){
        header('Location:../frontend/Prijavljen/admin.php');
        $_SESSION["uporabnisko_ime"] = $row['uporabnisko_ime'];
        $_SESSION['id'] = $row['id'];
    }else if(mysqli_num_rows($result)==1){
        header('Location:../frontend/Prijavljen/zacetna_prijavljen.php');
        $_SESSION["uporabnisko_ime"] = $row['uporabnisko_ime'];
        $_SESSION['id'] = $row['id'];
    }else{
        header('Location:../frontend/Prijavljen/zacetna_prijavljen.php');
    }

?>
