<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variables </title>
</head>
<body>
    <?php 
        //variables can store any kind of legal data
        //in PHP we must give dollar($) sign before variable name 
        
        $x = 10; //x variable hold value of 10
        $name = "Ram Bahadur";//name variable hold the string value which is "Ram Bahadur"
        
        $float_number = 4.5;//this holds floating number
        $gpa = 4.0; //this also holds floating number

        static $PI = 3.141592653589793238;//this static keyword keep this PI variable always same just like const in js if you are familiar with js 

        /*now fetching these variables in html and showing them in browser */

        echo "the value of variable x is:$x";
        $x++;//this will increase the value of x by 1
        echo "<br>";
        echo "$x";
        //the $studentArray variable holds array 
        $studentArray = array('ram','shyam','hari','gita','sita',12,14,2.35);

        //we can fetch those array values using index of corresponding values

        echo $studentArray[4];


    ?>


</body>
</html>