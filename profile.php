<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
          require "login1.php";
          $sql = "SELECT * FROM login";
          $result = mysqli_query($conn,$sql); 
        ?>

        <?php 
          while($row = mysqli_fetch_array($result)) {
        ?>
            <div class="img">
            
                  <div class="decs">
                    <?= $row['Username']; ?>
                  </div>
                  <div class="decs">
                    <?= $row['Email']; ?>
                  </div>
            </div>
        <?php } 
        ?>

    
</body>
</html>