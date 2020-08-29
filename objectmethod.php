<?php 
class Student{
    public $name;
    public $age;
    public $gpa;
    public $country;


    function __construct($name,$age,$gpa,$country){
        $this->name = $name;
        $this->age = $age;
        $this->gpa = $gpa;
        $this->country = $country;


    }

    function isscholar(){
        if ($this->gpa>=3.5){
            return "He is Scholar student";

        }
        else{
            return "He is not a Scholar Student ";
        }
    }

    function isForeigner(){

        if ($this->country == "nepal"){
            return "he is national student ";
        }
        else{
            return "he is foreigner";
        }
    }


}

$student1 = new Student("sharad",25,3.8,"nepal");
$student2 = new Student("Evanjelina",23,3.2,"America");

$is_scholar = $student2->isscholar();

echo $is_scholar;

echo "<br>";
$isForeigner = $student1->isForeigner();
echo $isForeigner;

//this will access isForeigner() method inside Student class 
$isForeigner = $student2->isForeigner();
echo $isForeigner;





?>