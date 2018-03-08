<?php
  require "includes/con.php";
  $submit=$_POST['btnSubmit'];
  $username = $_POST['tbUsername'];
  $password = $_POST['tbPassword'];
  if(isset($_POST['btnSubmit'])){
  $username = str_replace("'","",$username);
  $username = str_replace("-","",$username);
  $password = str_replace("'","",$password);
  $password = str_replace("-","",$password);

  $q = "select * from users where username = '{$username}' and password = '{$password}' limit 1";

  $res = mysqli_query($conn,$q);
  $user = mysqli_fetch_object($res);
  if($user){
    session_start();
    $_SESSION['status'] = $user->status;
    header('location: admin/index.php');
  }

}

 ?>
