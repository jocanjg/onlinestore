<?php
$category = isset($_GET['cat']) && is_numeric($_GET['cat'])?$_GET['cat']:1;
$q = mysqli_query($conn, "select * from items where category = $category");
while( $rw = mysqli_fetch_object($q)) {
 ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="item-img" src="img/<?php echo $rw->image ?>" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><?php echo $rw->title ?></a>
        </h4>
        <h5><?php echo $rw->price ?></h5>
        <p class="card-text"><?php echo $rw->description ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        <br>
        <a href="#" class="btn btn-default btn-sm">Add to Cart</a>
        <a href="?page=5&cat=<?php echo $rw->id; ?>" class="btn btn-default btn-sm">View</a>
        <br>
        <br>
      </div>
    </div>
  </div>
<?php } ?>
