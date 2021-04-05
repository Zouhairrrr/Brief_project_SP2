<?php
include("../../includes/header.php");
head("../../../css/main.css");
include("../../includes/dbconnect.php");
include("../../process/Pdbord.php");
?>


<div class="close"><a href="./dashBoard.php"><i class="fas fa-times"></i></a></div>

<div class="conatainer">
    <form class="formule" method="POST" action="./check/add.php" enctype="multipart/form-data">
        <div class="">
            <label for="name">Plat Name</label>
            <input type="text" name="name" placeholder="Insert Plat Name" required>
        </div>
        <div class="">
            <label for="price">price </label>
            <input type="text" name="price"  placeholder="Insert Plat Price" required>
        </div>

        <div class="image_wrapper">
            <label for="picture">Warnin! Max large is 16Mb</label>
            <input type="file" name="picture"required>
        </div>
        <div class="select_">
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
        <div class="save_submit">
            <input type="submit" name="save" value="Add Menu">
        </div>
    </form>
</div>

</body>
</html>
