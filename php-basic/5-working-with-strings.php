<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $phrase = "Giraffe Academy <br>";
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[2];
    echo "<br>";
    $phrase[0] = "B";
    echo $phrase;
    $phrase[0] = "G";
    echo str_replace("Giraffe", "Panda", $phrase);

    $phrase = "Giraffe Academy <br>";
    echo substr($phrase, 8);
    echo substr($phrase, 8, 3);

    ?>
    <!-- giraffe academy
        GIRAFFE ACADEMY
        20
        r
        Biraffe Academy
        Panda Academy
        Academy
        Aca -->

</body>

</html>