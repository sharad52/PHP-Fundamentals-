<?php

class Student{

    public $fullName;
    public $age;
    public $phoneNumber;


    function __construct($name,$age,$number){
        $this->fullName = $name;
        $this->age = $age;
        $this->phoneNumber = $number;

    }




}
//in this way we can initialize parameters of objects at once inside class i.e. by using constructor 

$student1 = new Student("Sharad Bhandari",24,9847895491);
echo $student1->fullName;
echo "<br>";
echo $student1->phoneNumber;
echo "<br>";
echo "<hr>";

$student2 = new Student("Binita Bhandari",21,9868692747);
echo $student2->fullName;
echo "<br>";
echo $student2->phoneNumber;
echo "<hr>";

$student3 = new Student("Sabina Pandey",23,9866812345);
echo $student3->fullName;
echo "<br>";
echo $student3->phoneNumber;
echo "<hr>";

?>