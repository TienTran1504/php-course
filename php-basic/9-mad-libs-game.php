<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="test.php" method="GET">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pluralNoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $celebrity = $_GET['celebrity'];

    echo "Rose are $color <br>";
    echo  "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";


    ?>


</body>

</html>