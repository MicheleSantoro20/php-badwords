<?php
    $paragraph = $_GET['paragraph'];
    $paragraph_length = strlen($paragraph);
    $censured = $_GET['censured'];
    $censured_paragraph = str_replace($censured, "***", $paragraph);
    $censured_paragraph_length = strlen($censured_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Response</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
        <h1><?php echo $paragraph ?></h1>
        <h1>Lunghezza: <span><?php echo $paragraph_length ?></span></h1>
        <h1><?php echo $censured_paragraph ?></h1>
        <h1>Lunghezza: <span><?php echo $censured_paragraph_length ?></span></h1>
    </div>


</body>
</html>