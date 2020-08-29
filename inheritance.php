<?php
//inheritance in php 
//just need to add syntax:extends class_name in child class;
//this is simple way of using inheritance in php
class Employee{
    public $name;
    public $address;

    public function __construct($name,$address){
        $this->name = $name;
        $this->address = $address;
    }

    public function intro(){
        echo "the  employe is {$this->name} and the address is {$this->address}.";
    }
}
class Developer extends Employee {
    public function salary(){
        echo "the salary of developer is 50000";
    }
}
$developer = new Developer("Sharad Bhandari","Pyuthan");
echo $developer->intro();
echo $developer->salary();




?>