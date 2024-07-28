<?php
    include "connection.php";

if(isset($_POST['submit']) && isset($_FILES['Image_url'])){

    echo "<pre>";
    print_r($_FILES['image_url']);
    echo "</pre>";

    $img_name = $_FILES['Image_url']['name'];
    $img_size = $_FILES['Image_url']['size'];
    $tmp_name = $_FILES['Image_url']['tmp_name'];
    $error = $_FILES['Image_url']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
}else {
    header("Location: index.php");
}

?>