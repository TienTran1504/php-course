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

        function construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
        function __construct($title, $author){
            $this->title = $title;
            $this->author = $author;
            $this->pages= 200;
        }
        
    }

    $book1 = new Book("Harry Potter","JK Rowling",400);
    echo $book1->pages;
    $book2 = new Book("Lord Of the Rings","TolKien");

    echo $book2->author;
    ?>




</body>

</html>