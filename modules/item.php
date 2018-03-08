<?php
$category = isset($_GET['cat'])?$_GET['cat']:0;
$q = mysqli_query($conn, "select * from items where id = $category");
while( $rw = mysqli_fetch_object($q)) {
 ?>
<div class="col-md-12">
<section class="panel">
      <div class="panel-body">
          <div class="col-md-6">
              <div class="pro-img-details">
                  <img class="item-img" src="img/<?php echo $rw->image ?>" alt="">
              </div>
          </div>
          <div class="col-md-6">
              <h4 class="pro-d-title">
                  <a href="#" class="">
                      <?php echo $rw->title; ?>
                  </a>
              </h4>
              <p>
                  <?php echo $rw->description; ?>
              </p>
              <div class="product_meta">
                  <span class="posted_in"> <strong>Categories:</strong><?php  echo $rw->category; ?></span>

              </div>
              <div class="m-bot15"> <strong>Price : </strong><?php echo $rw->price; ?></div>
              <div class="form-group">
                  <label>Quantity</label>
                  <input type="quantiy" placeholder="1" class="form-control quantity">
              </div>
              <p>
                  <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>                  
              </p>
          </div>
      </div>
  </section>
  </div>
<?php } ?>
