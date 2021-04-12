<?php
include("../includes/header.php");
head("../../css/main.css");
include("../includes/dbconnect.php");
include("../includes/buttons.php");
?>

<main class="menu_container">
    <div class="menu_content ">
        <nav>
            <div class="nav">
                <ul>
                    <?= listMaker("../pages/login.php", "LOGIN") ?>
                    <?= listMaker("#", "SIGN UP") ?>
                    <?= listMaker("../../index.php", "HOME") ?>
                    <?= listMaker("#", "CONTACT") ?>
                </ul>
            </div>
        </nav>
        <section class="menu_holder_btn">
            <div class="menu_el">
                <a href="?dayMenu=true" class="dash" >
                    <?php if (isset($_GET['dayMenu'])) { ?>
                    <?php } ?>
                MENU OF DAY
                </a>
            </div>
            <div class="menu_el">
                <a href="?weekMenu=true" class="dash">
                    <?php if (isset($_GET['weekMenu'])) { ?>
                    <?php } ?>
                    MENU OF WEEK
                </a>
            </div>
        </section>
       
            <?php if (isset($_GET['dayMenu'])) {?>
                <div class="day_menu">
                    <?php
                    $aujourdhui = getdate();
                    $mjour = $aujourdhui['wday']; //Dimanche 0 -> 6
                    $query = " SELECT * FROM `menuProduct` WHERE day = $mjour ";
                    $runquery = mysqli_query($link, $query);
                    while ($data = mysqli_fetch_array($runquery)) { ?>
                        <div class="menu_card" >
                        <a href="#" class="addToShop"><i class="fas fa-cart-plus"></i></a>
                            <img src="../images/<?= $data['image']?>">
                            <div class="wrapper">
                                <h2><?= $data['title'] ?> </h2>
                                <p><?= $data['price'] ?> DH</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }  ?>
            
            
        <?php if (isset($_GET['weekMenu'])) {?>
            <div class="day_menu">
                <?php
                $query_ = "SELECT * FROM menuProduct";
                $runquery_ = mysqli_query($link, $query_);
                while ($data_ = mysqli_fetch_array($runquery_)) { ?>
                    <div class="menu_card">
                        <a href="#" class="addToShop"><i class="fas fa-cart-plus"></i></a>
                        <img src="../images/<?= $data_['image'] ?> " >
                        <div class="wrapper">
                            <h2><?= $data_['title']?> </h2>
                            <p><?= $data_['price']?> DH</p>

                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</main>

</body>
</html>
