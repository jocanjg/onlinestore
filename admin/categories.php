<?php
    session_start();
    require "../includes/con.php";
    require "header.php";

    if(!isset($_SESSION['status']) or $_SESSION['status']!=3){
      die('invalid user');
    }

    $selected_id = -1;
    $selected_name = "";
    $selected_description = "";

    if(isset($_GET['cid'])){
      $q = mysqli_query($conn, "select * from categories where id = {$_GET['cid']}");
      $rw = mysqli_fetch_object($q);
      if($rw){
        $selected_id = $rw->id;
        $selected_name = $rw->name;
        $selected_description = $rw->description;
      }
    }

    if(isset($_POST['btn_insert'])){
      $selected_name = $_POST['tb_name'];
      $selected_description = $_POST['tb_description'];
      mysqli_query($conn,"insert into categories values (null,'{$selected_name}','{$selected_description}')");
      $selected_id = mysqli_insert_id($conn);
    }

    if(isset($_POST['btn_update'])){
      $selected_id = $_POST['selCategory'];
      $selected_name = $_POST['tb_name'];
      $selected_description = $_POST['tb_description'];
      mysqli_query($conn,"update categories set name='{$selected_name}', description='{$selected_description}' where id={$selected_id}");
    }

    if(isset($_POST['btn_delete'])){
      $selected_id = $_POST['selCategory'];
      mysqli_query($conn,"delete from categories where id={$selected_id}");
    }
?>
<link rel="stylesheet" href="../css/app.css">
<div class="container" style="margin-top: 60px;">
  <div class="row col-sm-6">
      <form method="post" action="">
      <div class="form-group">
        <?php $q = mysqli_query($conn, "select * from categories"); ?>
        <select onchange="window.location='?cid='+this.value" class="form-control" name="selCategory">
          <option value="-1">Select category</option>
          <?php while( $rw = mysqli_fetch_object($q)) {
            echo "<option " . ($selected_id==$rw->id?"selected":"") . " value='{$rw->id}'>{$rw->name}</option>";
               } ?>
        </select>
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="tb_name" value="<?php echo $selected_name ?>">
        <small id="emailHelp" class="form-text text-muted">Chose your category or create new</small>
      </div>
      <div class="form-group">
        <label>Descroption</label>
        <input type="text" class="form-control" name="tb_description" value="<?php echo $selected_description ?>">
        <small id="emailHelp" class="form-text text-muted">Type some description for your category</small>
      </div>
      <button type="submit" class="btn btn-primary btn-md" name="btn_insert">Add new</button>
      <button type="submit" class="btn btn-default btn-md" name="btn_update">Update</button>
      <button type="submit" class="btn btn-danger btn-md" name="btn_delete">Delete</button>
    </form>
  </div>
</div>
<?php require "footer.php" ?>
