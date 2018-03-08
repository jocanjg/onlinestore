<?php
    session_start();
    require "../includes/con.php";
    require "header.php";
    
    if(!isset($_SESSION['status']) or $_SESSION['status']!=3){
      die('invalid user');
    }

    $selected_id = -1;
    $selected_title = "";
    $selected_description = "";
    $selected_price = "";
    $selected_image = "";
    $selected_category = "";

    if(isset($_GET['iid'])){
      $q = mysqli_query($conn, "select * from items where id = {$_GET['iid']}");
      $rw = mysqli_fetch_object($q);
      if($rw){
        $selected_id = $rw->id;
        $selected_title = $rw->title;
        $selected_price = $rw->price;
        $selected_description = $rw->description;
        $selected_image = $rw->image;
        $selected_category = $rw->category;
      }
    }

    if(isset($_POST['btn_insert'])){
      $selected_title = $_POST['tb_title'];
      $selected_price = $_POST['tb_price'];
      if(isset($_FILES['fup_image'])){
        move_uploaded_file($_FILES['fup_image']['tmp_image'],"../img/".$_FILES['fup_image']['name']);
        $selected_image = $_FILES['fup_image']['name'];
      }
      $selected_description = $_POST['tb_description'];
      $selected_category = $_POST['sel_category'];
      mysqli_query($conn,"insert into items values (null,'{$selected_title}',{$selected_price},'{$selected_image}','{$selected_description}','{$selected_category}')");
      $selected_id = mysqli_insert_id($conn);
    }

    if(isset($_POST['btn_update'])){
      $selected_id = $_POST['selItem'];
      $selected_title = $_POST['tb_title'];
      $selected_price = $_POST['tb_price'];
      if(isset($_FILES['fup_image'])){
        move_uploaded_file($_FILES['fup_image']['tmp_image'],"../img/".$_FILES['fup_image']['name']);
        $selected_image = $_FILES['fup_image']['name'];
      }
      $selected_description = $_POST['tb_description'];
      $selected_category = $_POST['sel_category'];
      mysqli_query($conn,"update items set title='{$selected_title}', price='{$selected_price}', image='{$selected_image}', description='{$selected_description}', category='{$selected_category}'  where id={$selected_id}");
    }

    if(isset($_POST['btn_delete'])){
      $selected_id = $_POST['selItem'];
      mysqli_query($conn,"delete from items where id={$selected_id}");
    }

?>
<link rel="stylesheet" href="../css/app.css">
<div class="container" style="margin-top: 30px;">
  <div class="row col-sm-6">
      <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
        <?php $q = mysqli_query($conn, "select * from items"); ?>
        <select onchange="window.location='?iid='+this.value" class="form-control" name="selItem">
          <option value="-1">Select Item</option>
          <?php
            while( $rw = mysqli_fetch_object($q)) {
            echo "<option " . ($selected_id==$rw->id?"selected":"") . " value='{$rw->id}'>{$rw->title}</option>";
               } ?>
        </select>
      </div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="tb_title" value="<?php echo $selected_title ?>">
        <small id="emailHelp" class="form-text text-muted">Chose your category or create new</small>
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="tb_price" value="<?php echo $selected_price ?>">
        <small id="emailHelp" class="form-text text-muted">Type some description for your category</small>
      </div>
      <div class="form-group">
        <img src="../img/<?php echo $selected_image ?>" alt="" style="width:70px;height:70px;">
        <label>Image</label>
        <input type="file" class="form-control" name="fup_image">
        <small id="emailHelp" class="form-text text-muted">Type some description for your category</small>
      </div>
      <div class="form-group">
        <label>Descroption</label>
        <input type="text" class="form-control" name="tb_description" value="<?php echo $selected_description ?>">
        <small id="emailHelp" class="form-text text-muted">Type some description for your category</small>
      </div>
      <div class="form-group">
        <select class="form-control" name="sel_category">
          <option value="-1">Select category</option>
          <?php $q = mysqli_query($conn, "select * from categories"); ?>
          <?php while( $rw = mysqli_fetch_object($q)) {
            echo "<option " . ($selected_category==$rw->id?"selected":"") . " value='{$rw->id}'>{$rw->name}</option>";
               } ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-md" name="btn_insert">Add new</button>
      <button type="submit" class="btn btn-default btn-md" name="btn_update">Update</button>
      <button type="submit" class="btn btn-danger btn-md" name="btn_delete">Delete</button>
    </form>
  </div>
</div>
<?php require "footer.php" ?>
