<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="test.php" method="POST">
        Password: <input type="password" name="password"><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    $password = $_POST['password'];
    echo $password;

    ?>


</body>

</html>