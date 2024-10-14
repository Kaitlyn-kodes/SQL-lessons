<?php
  require "includes/header.php";
?>

  <main>
    <div >
      <section>
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p>You are loogged in!</p>';
          }
          else {
            echo '<p>You are loogged out!</p>';
          }
        ?>       
    </section>
    </div>
  </main>

<?php 
require "includes/footer.php";
?>