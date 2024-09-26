<!DOCTYPE html>
<html lang="en">            
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="box/icons/css/box/icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css"> 
    <title>DeShop Online Shopping.com</title>
</head>
<body>
  
    <header>
        <div class="logo">De<b>Shop</b></div>
           <nav class="navigation">
              <a href="index.php">Home</a>
              <a href="product.php">Product</a>
              <a href="#">Categories</a>
              <a href="profile.php">Profile</a>
           </nav>
              <button class="btnlogin-popup">LOGIN</button>
    </header>

    <article>
        <div class="newsletter">
            <strong>New Summer</strong>
                <h2>Outfits Collection</h2>
                 <p>Complexity explicit alternative benefit where as edge analysis
                    for change,Globally leverage existing an expanded array of leadership
                </p>
                <button class="bt">Shop Now</button>

        </div>
    </article>

    <aside>
        <div class="show">
            <img src="images/22.png" alt="" width="300" height="400">
        </div>
    </aside>

        <div class="wrapper">
    <span class="icon-close"><ion-icon name="close">x</ion-icon></span>
        <div class="form-box login">
            <h2>login</h2>
            <form action="login1.php" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="Email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="Password" required>
                    <label for="">Password</label>
                </div> 
                <div class="remember-forgot">
                    <label> <input type="checkbox" required>Remember me</label>
                    <a href="">Forgot Password</a>
                </div>
                <button class="btn" type="submit">Login</button>
                <div class="login-register">
                    <p>Don't have an account<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="view.php" method="post" enctype="multipart/form-data">
        <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="Username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="Email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="image"></ion-icon></span>
                    <input  type="file" name="Image_url" required>
                </div>
                <div class="remember-forgot">
                <label> <input type="checkbox" required>I agree to the terms & conditions</label>
                </div>
                <button class="btn" type="submit" name="submit">Register</button>
                <div class="login-register">
                    <p>Already have an account<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

