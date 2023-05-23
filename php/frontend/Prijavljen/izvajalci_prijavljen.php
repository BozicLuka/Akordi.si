<?php require_once '../../backend/povezava.php'; session_start();?>
<?php include_once '../../backend/proces/guard.php';?>

<!DOCTYPE html>
<html lang="sl">
    
    <head>
        <meta charset="UTF-8">
        <title>Akordi.si</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/izvajalci.css">
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

                        <li class = "current">

                            <form method="POST" action="../../backend/iskanje_prijavljen.php" style="padding: 0px; display: flex;">
                                <input type="text" placeholder="Vnesite" name="iskanje"/><br>
                                <input type="submit" name="sub" value="Išči"/>
                            </form>

                        </li>


                        <li><a href = "izvajalci_prijavljen.php">Izvajalci</a></li>
                        <li><a href = "noviAkordi_prijavljen.php">Novi akordi</a></li>
                        
                        <li>
                            <a href = "../Prijavljen/racun.php">
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

            <div class="najdi_avtorja">
                <form action="../../backend/najdi_avtorja.php" method="POST">
                    <br>    
                    <h3>Iskanje avtorja</h3>
                    <input type="text" name="avtor">
                    <input type="submit" name="sub" value="Išči">
                </form>
                <br>
            </div>

            <div class="dodajIzvajalca">
                <h3>Dodaj avtorja</h3>
                <form action="../../backend/dodaj_avtorja.php" method="POST">
                    <input type="text" name="avtor" placeholder="Vnesi ime avtorja">
                    <input type="submit" name="sub" value="Dodaj">
                </form><br>
            </div>

            <?php 

                $sql = "SELECT ime FROM avtorji ORDER BY ime ASC";

                $result = mysqli_query($link, $sql);
                
                while ($row = mysqli_fetch_array($result))
                {
                    echo $row['ime']."<br>";
                    
                }
            
            ?>
        </div>

    </body>

</html>