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
    $age = 90;
    class Book {
        var $title;
        var $author;
        var $pages;
        
    }

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;


    $book2 = new Book;
    $book2->title = "Lord Of the Rings";
    $book2->author = "TolKien";
    $book2->pages = 600;

    $str1 = "abc";
    echo $book2->author;
    ?>




</body>

</html>