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
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
        <button type="submit">Submit</button>
    </form>

    <br>
    Your name is: <?php echo $_GET["name"]?>
    <br>
    Your age is: <?php echo $_GET["age"]?>

</body>

</html>