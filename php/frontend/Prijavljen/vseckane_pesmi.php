<?php require_once '../../backend/povezava.php'; session_start()?>

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
                            <a href = "../racun.php">
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
            <br>
			<?php
                $uporabnik_id = $_SESSION['id'];
                $sql = "SELECT akordi_id FROM vseckane_pesmi WHERE (uporabnik_id=$uporabnik_id)";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result))
                {
                    $akordi_id = $row['akordi_id'];
                    $sql2 = "SELECT * FROM akordi WHERE (id=$akordi_id)";
                    $result2 = mysqli_query($link, $sql2);
                    echo "<pre>";
                        while ($row = mysqli_fetch_array($result2))
                        {
                            echo "<div style='background: white; border-radius: 15px;'>";
                            echo "<h3 style='margin-left: 20px; padding-top: 10px;'><b>".$row['ime_pesmi']."</b></h3>";
                            echo "<div style='margin-left: 20px;'>".$row['besedilo']."</div><br><br>";
                            echo "</div><br>";
                        }
                    echo "</pre>";
                    echo "<br>";
                }
			?>
        </div>

    </body>

</html>