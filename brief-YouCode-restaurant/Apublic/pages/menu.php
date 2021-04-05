<?php
include("../includes/header.php");
head("../../css/main.css");
include("../includes/dbconnect.php");
include("../includes/buttons.php");
?>

<main class="menu_container">
    <div class="menu_content ">
        <div class="nav">
            <ul>
                <?= listMaker("../pages/login.php", "LOGIN") ?>
                <?= listMaker("#", "SIGN UP") ?>
                <?= listMaker("../../index.php", "HOME") ?>
                <?= listMaker("#", "CONTACT") ?>
            </ul>
        </div>
        <div class="menu_el">
            <a href="?switchMenu=true" >
                <?php if (isset($_GET['switchMenu'])) { ?>
                    MENU OF DAY
                <?php }else { ?>
                    MENU OF WEEK
                <?php } ?>
            </a>
        </div>
        <?php if (isset($_GET['switchMenu'])) {?>
            <div class="day_menu">
                <?php
                $aujourdhui = getdate();
                $mjour = $aujourdhui['wday']; //Dimanche 0 -> 6
                $query = " SELECT * FROM `menuProduct` WHERE day = 2 ";
                $runquery = mysqli_query($link, $query);
                while ($data = mysqli_fetch_array($runquery)) { ?>
                    <div class="menu_card">
                        <img src="../images/<?= $data['image'] ?> " style="width: 160px;height:180px;" alt="logo">
                        <div class="wrapper">
                            <h2><?= $data['title'] ?> </h2>
                            <p><?= $data['price'] ?> DH</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php }else  {  ?>
            <div class="week_menu">
                <?php
                $query_ = "SELECT * FROM menuProduct ";
                $runquery_ = mysqli_query($link, $query_);
                while ($data_ = mysqli_fetch_array($runquery_)) { ?>
                    <div class="menu_card">
                        <img src="../images/<?= $data_['image'] ?> " style="width: 160px;height:180px;" alt="logo">
                        <div class="wrapper">
                            <h2><?= $data['title'] ?> </h2>
                            <p><?= $data['price'] ?> </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</main>

</body>
</html>
