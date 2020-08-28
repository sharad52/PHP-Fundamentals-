<?php
    class Book{

        var $title;
        var $author;
        var $pages;

        
    }

    $book1 = new Book;
    $book1->title = "optional mathematics 9";
    $book1->author = "Guinness publication pvt. ltd.";
    $book1->pages = 450;

    echo $book1->title;
    echo "</br>";
    echo $book1->author;
    echo "</br>";
    echo $book1->pages;



?>