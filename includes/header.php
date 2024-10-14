<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
    <header>

    <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link" href="calculator.php">Calculator</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="calender.php">Calender</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="arrays.php">Arrays</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="conditionals.php">Conditionals</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="data_types.php">Data Types</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="functions.php">Functions</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Index</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="loops.php">Loops</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="operators.php">Operators</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="superglobals.php">Super Globals</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    </header>

    <?php

    $_SESSION['username'] = "Kaitlyn29 ";
    echo $_SESSION['username'];
//this means that if the session is in php and on the header code, then the $_SESSION "isset".
    if(!isset($_SESSION['username'])){

      echo " You need to log in first!";
    } else {
      echo "You are logged in!";
    }
 echo "<br>";

    $sql = "SELECT * FROM usersfull;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid'] . "<br>";
      }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>