<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //this name variable hold string data type
        $name = "Buddha was Born in Nepal";
        echo "<h1>$name</h1>";
        /*----string functions/methods in String ----*/
        //strtoupper(var)-->this method changes the string value to uppercase
        $result = strtoupper($name);
        echo "original string:$name";
        echo "<br>";
        echo "String after apply strtoupper function:$result";
        echo "<br>";
        //strtolower(var)-this function changes the vaue to lower case

        $result1 = strtolower($name);
        echo "String after applying strtolower function:$result1";
        //addcslashes()->returns a string with backslashes in front of the specified characters
        $result2 = addcslashes($name,"N");
        echo $result2;
        echo "<br>";
        //addslashes(var)-> returns a string with backslashes in front of predefined characters
        $result3 = addslashes("Mt.Everest is 'lies' in Nepal ");
        echo $result3;
        echo "<br>";
        //chop(var)-> removes whitespaces and other characters from right end of a string 
        $rawString = "Crash Course of php";
        echo chop($rawString,"of");
        echo "<br>";
        echo "<br>";
        echo "<br>";

        //remaining methods can be used in same way
        //count_chars()->it returns all unique characters used in string

        $result4 = count_chars($rawString,3);
        echo $result4 ;
        echo "<br>";
        //here in count_chars funtion the first parameter is string variable to be checked  and second is int mode parameter.it ranges from 0-4 ,0 is default whereas 1 and 2 used for array and 3 and 4 for string .3 returns all the different character used and 4 returns unused characters.
        //echo("string") is itself a string function
         //implode("",$var)->this returns elements inside array

        $nameArray= array('Shyam','Hemanta','Supreme','puja');
        echo implode("",$nameArray);

        // simillaryly other string methods can be used same way 

    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>