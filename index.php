<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <form action="./receive.php" method="GET">

            <div>
                <label for="paragraph">Paragrafo:</label>
                <input type="text" placeholder="Scrivi il tuo paragrafo" name="paragraph">
            </div>

            <div>
                <label for="censured">Parola da censurare:</label>
                <input type="text" placeholder=" Scrivi la parola da censurare" name="censured">
            </div>


            <button type="submit">Invia Dati</button>

        </form>
    </div>

</body>
</html>