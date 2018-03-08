<?php
  session_start();
  require "header.php";

  if(!isset($_SESSION['status']) or $_SESSION['status']!=3){
    die('Invalid user');
  }
?>
<div class="showcase">
  <div class="container">
    <h1>Welcome to your Dashboard</h1>
    <p>Here you can add, change or delete you items or categories <br>
      Just choose the page above in navbar <br>
      and after you done just click logout and check your results. Have fun!
    </p>
  </div>
</div>
<?php require "footer.php" ?>
