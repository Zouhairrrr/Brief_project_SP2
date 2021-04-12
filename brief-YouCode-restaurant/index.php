<?php
include("./Apublic/includes/header.php");
head("./css/main.css");
include("./Apublic/includes/dbconnect.php");
include("./Apublic/includes/buttons.php");
?>
<main class="main" style="background-image: linear-gradient(45deg,#c0e35e91,transparent);">
    <div class="day_plat">
        <button id="plate" title="TODAY'S PLATE">
            <i class="fas fa-thumbtack" style="color: white " aria-hidden="true"></i>
        </button>
    </div>
    <div class="main_heading">
        <div class="main_heading_title">
            <h1><span>CODE</span> IS BETTER WHEN YOU EAT</h1>
        </div>
        <div class="main_heading_card">
            <ul>
                <li>EAT</li>
                <li><del>SLEEP</del></li>
                <li>
                    < CODE /> <i class="far fa-heart"></i>
                </li>
                <li>REPEAT</li>
            </ul>
        </div>
    </div>
    <div class="main_checklist">
        <?= btnClick("#", "okk", "ORDER NOW"); ?>
        <?= btnClick("./Apublic/pages/menu.php", "menu", "CHECK MENU"); ?>
        <?= btnClick("#", "ok", "SOICALS MEDIA"); ?>
    </div>
    <div class="main_checklist_nav">
        <form action="./Apublic/process/Plogin.php" method="POST">
            <a class="dash" href="./Apublic/pages/login.php"><button class="login_btn" name="login">LOGIN</button></a>
            <a class="dash" href="./Apublic/pages/signUp.php"><button class="login_btn" name="signUp">SIGN UP</button></a>
        </form>
    </div>
</main>

<div class="slid " id="btn">
        <?php
        $aujourdhui_ = getdate();
        $mjour_ = $aujourdhui_['wday']; //Dimanche 0 -> 6
        $query__ = " SELECT * FROM `menuProduct` WHERE day = $mjour_ GROUP BY day LIMIT 1 ";
        $runquery__ = mysqli_query($link, $query__);
        while ($data__ = mysqli_fetch_array($runquery__)) { ?>

        <a href="#" class="icon"><i class="fas fa-cart-plus"></i></a>
        <h1>CHECK OUT TODAY'S PLAT</h1>

        <?php menuAdder(  $data__['image'] ,$data__['title'], $data__['price'] );?>
     <?php } ?>
        
</div>



<div id="model"></div>
<?php
include("./Apublic/includes/footer.php");
?>