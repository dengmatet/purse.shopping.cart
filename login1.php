<?php
    require "connection.php";
 
if(isset($_POST['submit']))
 {
    $Email = $_POST['Email'];
    $Password = $_POSTmd5['Password'];
  
    $sql = "INSERT INTO login (Email, password)VALUES
    ('$Email','$password')";

    if(mysqli_query($conn,$sql))
    {
        $msg = "Accessed is successfully!";
    }
    else
    {
        $msg = "Access is failed!";
    }        
}
?>