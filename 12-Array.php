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
    $friends = array("Kevin","Karen","Oscar","Jimmy");
    echo $friends; // Array
    echo $friends[0]; // Kevin
    $friends[1] = 200;
    echo $friends[1];
    $friends[4] = " Angela";
    echo $friends[4];
    echo count($friends);
    ?>

</body>

</html>