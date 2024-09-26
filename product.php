<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeShop Product online.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /*-------campus------*/
.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.row{
  margin-top: 5%;
  display: flex;
  justify-content: space-between;
}
.campus-col{
  flex-basis: 32%;
  border: 1px solid #fff;
  backdrop-filter: blur(20px);
  border-radius: 10px;
  margin-bottom: 30px;
  position: relative;
  overflow: hidden;
}
.campus-col img{
  width: 100%;
  display: block;
  padding: 15px;
  height: 300px;
}
/*---- call to action ----*/

.row h1{
    color: #fff;
    padding: 10px;
    font-size: 15px;
}
.page-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 20px;
    background: transparent;
    bottom:10px;
    cursor: pointer;
}
.page-btn:hover{
    color: #000;
    border: 1px solid #ffd650;
    background: #fff;
    transition: 1s;
}

</style>
<body>
    <header>
        <div class="logo">De<b>Shop</b></div>
        <nav class="navigation">
          <a href="index.php">Home</a>
          <a href="product.php">Product</a>
          <a href="#">Categories</a>
          <a href="profile.php">Profile</a>
        </nav>
    </header>

    <section class="campus">
        <div class="row">
            <div class="campus-col">
                <h1>MEN COLLECTIONS</h1>
               <img src="images/4.jpg" alt="">
               <a href="view.php" class="page-btn">Explore All</a>
            </div>
            <div class="campus-col">
               <h1>WOMEN COLLECTIONS</h1>
               <img src="images/14.jpg" alt="">
               <a href="view.php" class="page-btn">Explore All</a>
            </div>
            <div class="campus-col">
               <h1>SPORTS COLLECTIONS</h1>
               <img src="images/38.png" alt="">
               <a href="view.php" class="page-btn">Explore All</a>
            </div>
        </div>
    </section>
    
</body>
</html>