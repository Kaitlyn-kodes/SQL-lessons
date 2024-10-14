<?php
  include "includes/header.php";
?>
  <main>
    <div>
      <section >
        <h1>Sign Up!</h1>
        <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
            echo '<p> Fill in all fields </p>';
          }
          else if ($_GET['error'] == "invaliduidmail") {
            echo '<p> Invalid username and e-mail! </p>';
          }
          else if ($_GET['error'] == "invaliduid") {
            echo '<p> Invalid username!</p>';
          }
          else if ($_GET['error'] == "invalidmail") {
            echo '<p> Invalid e-mail! </p>';
          }
          else if ($_GET['error'] == "passwordcheck") {
            echo '<p> Your passwords do not match! </p>';
          }
          else if ($_GET['error'] == "usertaken") {
            echo '<p> Username is already taken! </p>';
          }
        }
        else if ($_GET['signup'] == "success") {
          echo '<p>Signup successfull!</p>';
        }
        ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="text" name="mail" placeholder="E-mail">
                <br>
                <input type="text" name="pwd" placeholder="Password">
                <br>
                <input type="text" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit"> Sign Up</button>
            </form>
    </section>
    </div>
  </main>

