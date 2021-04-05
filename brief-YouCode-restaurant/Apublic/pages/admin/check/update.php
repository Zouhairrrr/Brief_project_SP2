<?php
include("../../../includes/dbconnect.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';
$requette = "SELECT * FROM menuProduct WHERE id_menu = $id";
$query = mysqli_query($link, $requette);
$data = mysqli_fetch_array($query);

if (isset($_POST['modify'])) :
    $dir = '../../../images';
    $target = $dir . basename($_FILES['picture']['name']);

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
        $uploaded = $_FILES['picture']['name'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $day = $_POST['day'];
        $image = $uploaded;
        $id_ = $_POST['id'];
        $query = "UPDATE `menuProduct` SET   `title` = '$title', `image` ='$image', `price`='$price', `day`='$day' WHERE id_menu = $id_";
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


?>
<div class="edit_page" id="btn2">
    <form class="edit_form" method="post" action="" enctype="multipart/form-data">
        <td> <img src="../../../images/<?= $data['image'] ?>" style="width: 80px;"></td>

        <div class="box">
            <label for="name">Plat Name</label>
            <input type="text" value="<?= $data['title'] ?>" name="title">
            <input type="hidden" value="<?= $data['id_menu'] ?>" name="id">
        </div>
        <div class="box">
            <label for="price">price </label>
            <input type="text" value="<?= $data['price'] ?>" name="price" class="form-control">
        </div>
        <div class="image_holder">
            <label><i class="fas fa-exclamation-circle"></i> WARNING! MAX SIZE OF IMAGE 2Mb (1230px,750px)</label>
            <input type="file" name="picture" class="" id="" required>
        </div>
        <div class="select">
            <select name="day" id="" required>
                <option value="0">Dimanche</option>
                <option value="1">Lundi</option>
                <option value="2">Mardi</option>
                <option value="3">Mercredi</option>
                <option value="4">Jeudi</option>
                <option value="5">Vendredi</option>
                <option value="6">Samedi</option>
            </select>
        </div>
        <div class="save_btn">
            <button type="submit" name="modify">SAVE</button>
        </div>
    </form>
</div>
