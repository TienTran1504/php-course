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
    $title = "My first Post";
    $author = "Tien";
    $wordCount = 400;
    include "article-header.php";
    echo "<br>";
    include "use-tools.php";
    sayHi("Tien");
    echo $feetInMile;
    ?>




</body>

</html>