<?php
    require "connection.php";
 
if(isset($_POST['submit']))
 {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $target_dir = "images/";    
    $target_file = $target_dir.basename($_FILES['Image_url']["name"]);

    move_uploaded_file($_FILES['Image_url']["tmp_name"], $target_file);
    $sql = "INSERT INTO login (Username, Email, password, Image_url)VALUES
    ('$Username','$Email','$password','$target_file')";

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