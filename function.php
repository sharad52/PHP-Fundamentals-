<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byaaj meter</title>
</head>
<body>

<form action="function.php" method="POST">
    <label>Principle:</label>
    <input type="text" name="principle"><br>
    <lable>Time:</label>
    <input type='text' name="time"><label>Month</label><input type="checkbox" name='Duration[]' value="month">
    <label>Year</label><input type="checkbox" name='Duration[]' value="year"><br>
    <label>Rate:</label>
    <input type="text" name="rate"><br>
    <input type="submit" >
</form>
    


<?php
$p = $_POST["principle"];
$t = $_POST["time"];
$r = $_POST["rate"];
$duration = $_POST["Duration"];


function ByajMeter($principle,$time,$rate){
    $result = ($principle*$time*$rate)/100;
    return $result;
}
if($duration[0] == "month"){
    $t = $t/12;

    $interest = ByajMeter($p,$t,$r);
    echo "total interest is: $interest";
}
else {
    $interest = ByajMeter($p,$t,$r);
    echo "total interest is: $interest";

}

//in this example i have demonstrate function and return method
//use of if else statement 


?>

</body>
</html>