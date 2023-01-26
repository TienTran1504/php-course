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
        Name: <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
    $grades = array("Jim"=>"A+","Pam"=>"B-","Alice"=>"C+");
    
    echo $grades["Jim"]; // A+ nếu trùng key thì nó sẽ lấy value cuối cùng của key tương ứng
    
    $grades["Tim"] = "F";
    echo $grades["Tim"];

    $grades["Pam"] = "D";
    echo $grades["Pam"];
    echo count($grades);
    echo $grades[$_POST["student"]];
    ?>

</body>

</html>