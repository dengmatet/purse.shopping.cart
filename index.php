<?php

  $msg = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De shopping.com</title>
    <link rel="stylesheet" href="static/style.css" />
    <script rel="stylesheet" src="static/script.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="static/js/bootstrap.min.js" />
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="static/img/shopping-bags.png" alt="" width="30" height="30" />
        <br />
        De<b>Shop</b>
      </div>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="admin/category.php">Categories</a>
        <a href="">Product</a>
        <!-- Use any element to open the sidenav -->
      </nav>
      <button class="col-sm-1 mb-2 btn btn-outline-info" onclick="openNav()">
        LOGIN
      </button>
    </header>
   <div id="main">
    <article class="index-category">
        <div class="letter">
            <strong>New Summer</strong>
                <h3>Outfits Collection</h3>
                 <p>Complexity explicit alternative benefit where as edge analysis
                    for change,Globally leverage existing an expanded array of leadership
                     We have included all servers required for running the bundled
                     web application, so you will find installs large numbers of files. 
                     If you are installing application on a Windows machine with an antivirus
                      app enabled, this may slow down the installation significantly, and there is also 
                      a chance that one of the servers (web server, database server) may be blocked by the 
                      antivirus software. If you have an antivirus
                </p>
                <a href="customer/customer_add.php" class="col-sm-4 btn btn-outline-info">Shop Now</a>
        </div>
        <div class="index-category-box">
            <img src="static/img/1.png" alt="" width="300" height="400">
        </div>
    </article>
   </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        >&times;</a
      >
      <div class="container mt-5 text-white">
        <h4 class="text-center">login</h4>
        <form
          class="form-inline"
          action="admin/login.php"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <label for="">Email</label>
            <input
              type="text"
              name="email"
              class="form-control mt-2"
              required="required"
            />
          </div>
          <div class="form-group">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <label for="">Password</label>
            <input
              type="password"
              name="password"
              class="form-control mt-3"
              required="required"
            />
          </div>
          <div class="checkbox">
            <label class="text-default mt-3">
              <input type="checkbox" required="required" />Remember me</label
            >
            <a class="text-small text-white" href="">Forgot Password</a>
          </div>
          <button class="col-sm-12 mt-3 btn btn-outline-info" type="submit" name="submit">
            Login
          </button>
        </form>
      </div>
    </div>

  </body>
</html>
