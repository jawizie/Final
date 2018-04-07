<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log in</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

 

  </head>

  <body>
     <div class="container">

      <div id="login">

        <form action="insert.php" method="POST">

          <fieldset class="clearfix">
          <label>
            Username:
          </label>
          <p>
            <input type="text" id="username" name="username" value="username">
          </p>
          <label>
            Password:
          </label>
          <p>
            <input type="password" id="password" name="password" value="password">
          </p>
          </fieldset>

        </form>

        <p>Incorrect user/password combination</p>
        <p>
        <a href="index.html">Try Again!</a><span class="fontawesome-arrow-right"></span>
        </p>

      </div> 

    </div>
<!--<?php
    //require('connect.php');
    // If the values are posted, insert them into the database.
    require_once('process.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `test` (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if($result){
           echo "User Created Successfully.";
        }else{
            echo "User Registration Failed";
        }
    }
    ?>
-->
  </body>
</html>

</body>
<!--
  some colors:
  #363b41 = black color
-->
</html>


