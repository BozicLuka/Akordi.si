<!DOCTYPE html>
<html lang="sl">
    
    <head>
        <meta charset="UTF-8">
        <title>Registracija</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../css/prijava.css">
    </head>

    <body style="background: #ebebeb;">

        <div class = "navigation-bar" align="center">
            <div class = "container">
                <a href = "zacetna.php" class = "logo"><h1><span>Akordi</span>.si</h1></a>
            </div>
        </div>

        <div class="row" style="padding-top: 50px;">
            <div class="col"></div>

            <div class="col-4">
                <form method="post" action="../backend/novUporabnik.php" style="padding: 20px;">
                    <h1>Registracija</h1>
                    <br>
                    <input type="text" placeholder="Ime" name="ime" required/><br>
                    <input type="text" placeholder="Priimek" name="priimek" required/><br>
                    <input type="text" placeholder="Uporabniško ime" name="uporabnisko_ime" required/><br>
                    <input type="email" placeholder="Epošta" name="email" required/><br>
                    <input type="password" placeholder="Geslo" name="geslo" required/><br>
                    <input type="submit" name="sub" value="Pošlji"/>
                    <a href="prijava.php">Prijava</a>
                </form>
        
            </div>

            <div class="col"></div>
        </div>
    
    </body>

</html>