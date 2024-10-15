<?php
  require "includes/header.php";
?>

  <main>
    <div >
      <section>
        <?php
          if (isset($_SESSION['user_id'])) {
            echo '<p>You are logged in!</p>';
          }
          else {
            echo '<p>You are logged out!</p>';
          }
        ?>       
    </section>
    </div>
  </main>

<?php 
require "includes/footer.php";
?>