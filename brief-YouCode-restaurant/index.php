<?php
include("./Apublic/includes/header.php");
head("./css/main.css");
include("./Apublic/includes/dbconnect.php");
include("./Apublic/includes/buttons.php");
?>
<main class="main" style="background-image:url(./Apublic/images/bcgImg.jpg)">
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
            <a href="./Apublic/pages/login.php"><button class="login_btn" name="login">LOGIN</button></a>
            <a href="./Apublic/pages/signUp.php"><button class="login_btn" name="signUp">SIGN UP</button></a>
        </form>
    </div>
</main>

<div class="slid " id="btn">
    <div class="slid_container">
        <h1>hello world</h1>
        <img src="../images/tacos.jpg" style="width: 100px;" alt="logo">
        <p>Lorem, ipsum.</p>
    </div>
</div>
<div id="model"></div>
<?php
include("./Apublic/includes/footer.php");
?>