<?php require "login.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JEWELRY store</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">JEWERLY<small style="font-size:12px;">store</small></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shoping Cart <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="store.php?page=3">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            <li><a href="store.php?page=1">Store</a></li>
            <li><a href="store.php?page=2">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://google-plus.com"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                   <div class="row">
                      <div class="col-md-12">
                        Login via
                        <div class="social-buttons">
                          <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                          <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                        </div>
                                        or
                         <form class="form" method="post" action="" id="login-nav">
                            <div class="form-group">
                               <label class="sr-only" for="exampleInputEmail2">Username</label>
                               <input type="text" class="form-control" id="exampleInputEmail2" name="tbUsername" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                               <label class="sr-only" for="exampleInputPassword2">Password</label>
                               <input type="password" class="form-control" id="exampleInputPassword2" name="tbPassword" placeholder="Password" required>
                                                     <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                            </div>
                            <div class="form-group">
                               <button type="submit" name="btnSubmit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                            <div class="checkbox">
                               <label>
                               <input type="checkbox"> keep me logged-in
                               </label>
                            </div>
                         </form>
                      </div>
                      <div class="bottom text-center">
                        New here ? <a href="#"><b>Join Us</b></a>
                      </div>
                   </div>
                </li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
