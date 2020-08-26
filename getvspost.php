<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET vs POST method</title>
</head>
<body>
<!-- html form starts here -->

    <form action="getvspost.php" method="POST">
        <label>Username:</label>
        <input type="text" name="name"><br>
        <span><br></span>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <span><br></span>
        <input type="submit" value="login">
    
    </form>
<!-- html form ends here -->
    <?php 
        /*in get method the data sent over url but in post method data are directly sent via body of Http
        the method of getting user data using "POST" method is shown below:
       */
      $userName = $_POST["name"];
      $userPassword=$_POST["password"];

      echo "Welcome Mr.$userName<br>";
      echo "you have entered '$userPassword' as your password";







    ?>
</body>
</html>