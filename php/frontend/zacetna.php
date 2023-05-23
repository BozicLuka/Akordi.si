<?php require_once '../backend/povezava.php';?>
<!DOCTYPE html>
<html lang="sl">
    
    <head>
        <meta charset="UTF-8">
        <title>Akordi.si</title>
        <link rel="stylesheet" href="../../css/zacetna.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body style="background: #ebebeb;">

        <!--////////////////////NAVIGACIJSKA VRSTICA////////////////////-->
        <div class = "navigation-bar">
            <div class = "container">

                <a href = "zacetna.php" class = "logo"><h1><span>Akordi</span>.si</h1></a>
                <img id = "mobile-cta" class = "mobile-menu" src = "../assets/menu.svg" alt = "Menu">

                <nav>
                    <img id = "mobile-exit" src = "../assets/exit.svg" class = "mobile-menu-exit" alt = "exit">

                    <ul class = "navigation">

                        <li class = "current">

                            <form method="POST" action="../backend/iskanje.php" style="padding: 0px; display: flex;">
                                <input type="text" placeholder="Vnesite" name="iskanje"/><br>
                                <input type="submit" name="sub" value="Išči"/>
                            </form>

                        </li>


                        <li><a href = "izvajalci.php">Izvajalci</a></li>
                        <li><a href = "prijava.php">Prijava</a></li>

                    </ul>
                </nav>
            
            </div>
        </div>


        <div class="hero" style="padding-top: 20px;">
            <pre>
                <?php
                    $sql = "SELECT * FROM akordi";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo "<div style='background: white; border-radius: 15px;'>";
                        echo "<h3>".$row['ime_pesmi']."</h3>";
                        echo $row['besedilo']."<br><br>";
                        echo "</div><br>";
                    }
                ?>
            </pre>
        </div>

            
    </body>

</html>