<!DOCTYPE html>
<html lang="sl">

    <head>
        <meta charset="UTF-8">
        <title>Prijavite se</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../css/prijava.css">
    </head>

    <body>

        <div class = "navigation-bar" align="center">
            <div class = "container">
                <a href = "zacetna.php" class = "logo"><h1><span>Akordi</span>.si</h1></a>
            </div>
        </div>

        <div class="row" style="padding-top: 50px;">
            <div class="col"></div>
            <div class="col-4">
                <form method="POST" action="../backend/preveri_prijavo.php" style="padding: 20px;">    
                    <h1>Prijava</h1>
                    <br>
                    <input type="email" placeholder="Epošta" name="email" required/><br>
                    <input type="password" name="geslo" placeholder="Geslo" required/><br>
                    <input type="submit" name="sub" value="Pošlji"/>
                    <a href="registracija.php">Registracija</a>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </body>

</html>