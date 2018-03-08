<?php

require "includes/header.php"; ?>
  <!-- SHOWCASE  -->
<div class="showcase">
  <div class="container">
    <h1>New Collection and New Design</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Praesentium, sequi, officia.
      Expedita assumenda amet ut vero earum saepe <br>voluptate perferendis.</p>
    <a href="store.php?page=1" class="btn btn-primary">Shop Now</a>
  </div>
</div>
  <!-- CATEGORY LIST -->
<div class="list-item">
  <?php
  $q = mysqli_query($conn, "select * from categories");
  while( $rw = mysqli_fetch_object($q)) {
  ?>
    <a href="store.php?page=1&cat=<?php echo $rw->id ?>" class="list-group-item"><?php echo $rw->name; ?></a>
 <?php } ?>
</div>
  <!-- SECTIONS -->
<div class="section-a">
  <div class="container">
    <div class="row">
        <h2>FEATURED JEWELRY FOR YOU</h2>
      <div class="col-md-4">
          <div class="card">
          <img class="card-img-top" src="img/diamonds.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Engagement &amp;<br> Wedding Rings</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
        </div>
      <div class="col-md-4">
          <div class="card">
          <img class="card-img-top" src="img/mlada.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Diamond Stud<br> Earrings</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
        </div>
      <div class="col-md-4">
          <div class="card">
          <img class="card-img-top" src="img/cover-croped.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">Birthstone <br>Jewelry</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
  <!-- NEWSLETTER -->
<div class="container">
	<div class="row">
    <div class="col-md-12">
      <div class="span12">
        <div class="thumbnail center well well-small text-center">
          <h2>Newsletter</h2>
          <p>Subscribe to our weekly Newsletter and stay tuned.</p>
          <form action="" method="post">
              <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                  <input type="text" name="" placeholder="your@email.com">
              </div>
              <br />
              <input type="submit" value="Subscribe Now!" class="btn btn-large" />
         </form>
        </div>
      </div>
    </div>
	</div>
</div>
<?php require "includes/footer.php"; ?>
