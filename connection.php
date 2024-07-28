
<?php
$server = "localhost";
$Username = "Username";
$Email = "Email";
$Password = "Password";
$Image_url = "Image_url";
$dbname = "example";

// create connection
$connect = mysqli_connect("localhost","root","","example");

// select from table
$query = "SELECT * FROM login ORDER BY id DESC";

$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_row($result) > 0)



//insert into the database
if(isset($_POST['submit'])){

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Image_url = $_POST['Image_url'];
}
    
$insert = "INSERT INTO login(Username, Email, Password, Image_url) 
VALUES('$Username','$Email','$Password','$Image_url')";

?>