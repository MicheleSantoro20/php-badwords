<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <form action="./receive.php" method="GET">
        
        <label for="paragraph">Paragrafo:</label>
        <input type="text" placeholder="Scrivi il tuo paragrafo" name="paragraph">
        <label for="censured">Parola da censurare:</label>
        <input type="text" placeholder=" Scrivi la parola da censurare" name="censured">

        <button type="submit">Invia Dati</button>

    </form>
</body>
</html>