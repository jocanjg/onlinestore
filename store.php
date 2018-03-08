<?php
  require "includes/con.php";
  require "includes/header.php";
?>
<!-- Page Content -->
<div class="container" style="margin-top:60px;">
 <div class="row">
   <div class="col-lg-3">
       <div class="src">
           <form class="form-horizontal" method="get">
             <input type="hidden" name="page" value="4">
             <div class="form-group">
               <label for="filter">Select Category</label>
               <select class="form-control" name="cat">
                 <?php
                    $q = mysqli_query($conn, "select * from categories");
                    while( $rw = mysqli_fetch_object($q)) { ?>
                    <option value='<?php echo $rw->id ?>'><?php echo $rw->name ?></option>
                 <?php  } ?>
               </select>
             </div>
             <div class="form-group">
               <label for="contain">Contains the words</label>
               <?php
               if(isset($_POST['q'])){
                   $src = $_POST['q'];
                   $src = str_replace("'","",$src);
                   $src = str_replace("-","",$src);
                 }
                ?>
               <input class="form-control" type="text" name="q"  />
             </div>
             <button type="submit" class="btn btn-primary">Search</button>
           </form>
        </div>


     <h1 class="my-4"><a href="?page=1&cat=1">Category list</a></h1>
     <div class="list-group">
       <?php
         $q = mysqli_query($conn, "select * from categories");
         while( $rw = mysqli_fetch_object($q)) { ?>
           <a href="?page=1&cat=<?php echo $rw->id ?>" class="list-group-item"><?php echo $rw->name; ?></a>
        <?php } ?>
     </div>
   </div>
   <!-- /.col-lg-3 -->

 <div class="col-lg-9">
   <div class="row">
    <?php
      $default = (isset($_GET['page']))?$_GET['page']:0;
      $pages = array(
          '1' =>'items.php',
          '2' =>'contact.php',
          '3' =>'cart.php',
          '4' =>'search.php',
          '5' =>'item.php'
       );
    if(isset($pages[$default])){
      include "modules/".$pages[$default];
    }else{
      echo "<h3>Page does not exist!</h3>";
    }
    ?>
   </div>
 </div>
   <!-- /.col-lg-9 -->
 </div>
 <!-- /.row -->
</div>
<!-- /.container -->

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
</body>
</html>
