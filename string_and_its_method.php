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

        //remaining methods can be used in same way
        

    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>