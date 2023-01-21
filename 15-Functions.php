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
    sayHi("Tien",21);
    $name = "Tom";
    sayHi($name,22);
    function sayHi($name,$age){
        echo "Hello $name, you are $age <br>";
    }   
    ?>

</body>

</html>