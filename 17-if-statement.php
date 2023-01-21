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
    // $isMale = true;
    // $isTall = false;
    // if($isMale && $isTall){ // ||
    //     echo "You are male & tall";
    // }elseif($isMale){ // else if hay elseif
    //     echo "You are male & not tall";
    // } else {
    //     echo "You are not male";
    // }

    function getMax($num1, $num2, $num3){
        // return $num1 > $num2 ? $num1:$num2;
        if($num1 >= $num2 && $num1 >=$num3){ // == !=
            return $num1;
        } elseif($num2 >= $num1 && $num2 >=$num3) {
            return $num2;
        } else {
            return $num3;
        }
    }
    echo getMax(6, 93,80);
    ?>


</body>

</html>