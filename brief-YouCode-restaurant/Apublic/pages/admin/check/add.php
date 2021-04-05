<?php
include("../../../includes/dbconnect.php");

if (isset($_POST['save'])) :

    $dir = '../../../images';
    $target = $dir . basename($_FILES['picture']['name']);

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
        $uploaded = $_FILES['picture']['name'];
        $title = $_POST['name'];
        $price = $_POST['price'];
        $day = $_POST['day'];
        $image = $uploaded;
        $query = "INSERT INTO `menuProduct`( `title`, `image`, `price`, `day`) VALUES ('$title','$image','$price','$day')";
        $resault = mysqli_query($link, $query);
        if ($resault) {
            header("location:../dashBoard.php");
        } else {
            echo 'PLEASE REFRESH PAGE AGAIN !! ';
        }
    } else {
        echo 'error';
    }
endif;
