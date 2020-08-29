<?php
//getter and setter function in php 

class Movie{
    public $name;
    private $ratings;


    function __construct($name,$ratings){
        $this->name = $name;
        $this->setRatings($ratings); 
    }
        //function to get private variables
    function getRatings(){
        return $this->ratings;
    }

    function setRatings($ratings){
        if ($ratings=="PG-13"||$ratings=="PG"||$ratings=="R"||$ratings=="G"){
            $this->ratings=$ratings;
        }
        else{
            $this->ratings = "NR";
        }
        }
    

}

$avengers = new Movie("Avengers","PG-13");
$Jhole = new Movie("Mr. Jhole","hawa");
// echo $avengers->ratings;
echo "<br>";
// echo $avengers->getRatings();
echo "<br>";
//echo $Jhole->ratings;//this will through me fatal error because i ma accessing private variable outside the class
//but i can access the function inside class and use that function to reuturn private variable
// echo $Jhole->setRatings("hawa");
echo $Jhole->getRatings();




?>