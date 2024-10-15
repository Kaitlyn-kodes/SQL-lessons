<?php
  session_start();
  require "dbh.inc.php";
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

    <nav>
            <a href="#">
                <img src ="#" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Index</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div>
              <?php
                if (isset($_SESSION['user_id'])) {
                  echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                 
                }
                else {
                  echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Signup</a>';
                }
              ?>
                
                
            </div>

        </nav>

    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
