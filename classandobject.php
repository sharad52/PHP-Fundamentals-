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
//from this method we have to give arguments for every object like this 
//this will make code lenthy and make code repetation so we will see how to use constructor to avoid this type of falut




?>