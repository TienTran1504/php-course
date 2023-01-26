<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="test.php" method="post">
        What was your grade?
        <input type="text" name="grade">

        <input type="submit">
    </form>
    <?php
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);

    for ($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";
    }
    ?>


</body>

</html>