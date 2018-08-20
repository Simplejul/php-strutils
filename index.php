<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>strutils</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Ola!</h1>
    <?php

    include 'StrUtils.php';
    $string = new StrUtils('String');

    echo $string->getst();

    ?>
</body>
</html>