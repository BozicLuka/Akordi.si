<?php require_once '../../backend/povezava.php'; session_start();?>
<?php include_once '../../backend/proces/guard.php';?>

<!DOCTYPE html>
<html lang="sl">
    
    <head>
        <meta charset="UTF-8">
        <title>Akordi.si</title>
        <link rel="stylesheet" href="../../../css/zacetna.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body style="background: #ebebeb;">

        <!--////////////////////NAVIGACIJSKA VRSTICA////////////////////-->
        <div class = "navigation-bar">
            <div class = "container">

                <a href = "zacetna_prijavljen.php" class = "logo"><h1><span>Akordi</span>.si</h1></a>
                <img id = "mobile-cta" class = "mobile-menu" src = "../assets/menu.svg" alt = "Menu">

                <nav>
                    <img id = "mobile-exit" src = "../assets/exit.svg" class = "mobile-menu-exit" alt = "exit">

                    <ul class = "navigation">

                        <li>
                            <a href = "racun.php">
                                <?php    
                                    echo $_SESSION['uporabnisko_ime'];
                                ?>
                            </a>
                        
                            <?php
                                
                            ?>
                        
                        </li>
                        <li><a href="../../backend/odjava.php">Odjava</a></li>

                    </ul>
                </nav>
            
            </div>
        </div>


        <div class="hero">
            <?php
                $sql = "SELECT * FROM uporabniki ORDER BY id ASC";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result))
                {
                    echo "<br>";
                    echo "<div style='background: white; border-radius: 15px; padding-left: 20px;'>";
                    echo "<br>ID: ", $row['id'], ", Ime: ", $row['ime'], ", Priimek: ", $row['priimek'], ", E-pošta: ", $row['email'];
                    echo "<form action='../../backend/izbrisi_uporabnika.php' method='POST'>";
                    echo "<input type='text' name='id' hidden value=".$row['id'].">";
                    echo "<input type='submit' name='sub' value='Izbriši'>";
                    echo "</form><br>";
                    echo "</div>";
                }
            ?>    
        </div>

            
    </body>

</html>