<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //in php number works as same way as string works 

        $number = 8;
        $value = 4.3;
        $phoneNumber = 9847895491;

        echo "the contact number of sharad:$phoneNumber";
        echo "<br>";
        //Math  functions in php 
        //floor()-> this returns the lowest possible value of decimal 
        $floorValue = floor(5.9);
        echo "the floor value of 5.9 is:$floorValue";
        //ceil()->returns the highest upper value 
        echo "<br>";
        $ceilValue= ceil(5.1);
        echo "the ceil value of 5.1 is:$ceilValue";
        echo "<br>";
        //cos()->returns the cos value of given number
        $randomNumber=M_PI;
        $cosValue = cos($randomNumber);
        echo "the cos value of $randomNumber is :$cosValue";
        //cosh()->hyperbolic cosine function 
        echo "<br>";
        echo "<br>";
        
        //abs()->returns the absolute value of a number 
        
        $aNumber = -200;
        $aResult = abs($aNumber);
        echo "the absolute value of $aNumber is:  $aResult";






    ?>

</body>
</html>