<?php
/*----Arrays---- */
//very important aspect of any programming language.p.s. in python list are similar things like array

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

$gpa = array('Biyani'=>4.0,'Sushant'=>3.9);

print_r($gpa);


?>
