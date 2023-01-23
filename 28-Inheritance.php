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
    class Chef {

        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSalad()
        {
            echo "The chef makes Salad <br>";
        }
        
    }

    class ItalianChef extends Chef
    {
        function makeChicken(){
            echo "The Italian chef make chicken <br>";
        }
        function makePasta(){
            echo "The chef make pasta <br>";
        }
    }


        $chef1 = new Chef();
        echo $chef1->makeChicken();

        $chef2 = new ItalianChef();
        echo $chef2->makeChicken();
        echo $chef2->makeSalad();
        echo $chef2->makePasta();


    ?>




</body>

</html>