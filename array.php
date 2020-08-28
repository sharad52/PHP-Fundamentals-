<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array in php</title>
</head>
<body>

    










<?php

include "form.html";
/*----Arrays---- */
//very important aspect of any programming language.p.s. in python list are similar things like array


// accessing values from html form

$fruitCollection = $_POST["fruits"];
echo $fruitCollection[2];
echo "<br>";
//defining array
$studentList = array('Diamond','sushant','Divya','Biyani');

for($i=0;$i<count($studentList);$i++){
    echo "$studentList[$i]<br><br>";
}
//pushing new elements in to array
//array_push()->inserts one or more elements to the end of an array

array_push($studentList,'priya','Lomas','Alisha');

echo "<br>";

for($i=0;$i<count($studentList);$i++){
    echo "$studentList[$i]<br>";
}

//Associative array
//key-value pair array


$gpa = array('Biyani'=>4.0,'Sushant'=>3.9,'Diamond'=>4.0,'Divya'=>3.88);
//accessing associative array 
//need to pass key in array 
echo $gpa['Biyani'];
echo "<br/>";

//iteariting associative array 
//foreach loop 

/* foreach loop syntax:

    foreach($array as $key => $value){
        //code;
    }
*/

$Animals = array('pigeons'=>'Birds',
        'Tiger'=>'Mammal',
        'Snake'=>'Reptile',
        'Frog'=>'Amphibian',
        'Gadus morhua'=>'pisces');


    foreach ($Animals as $name => $class) {
        echo $name .' '.$class.'<br/>' ;
    }


?>

</body>
</html>
