<?php
include("../includes/header.php");
head("../../css/main.css");
include("../process/Plogin.php");
include("../includes/buttons.php")
?>


<main class="login_box">
    <nav class="nav">
        <?= listMaker("./menu.php", "MENU") ?>
        <?= listMaker("../../index.php", "HOME") ?>
    </nav>
    <hr style="width: 90%;margin: .6rem auto;">
    <div class="wrapper">
        <div class="intro">
            <div class="intro_image"></div>
            <div class="intro_text">
                <h2>Lorem, ipsum.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum, veritatis aut vero iusto qui odio eveniet minus facere cum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum, veritatis aut vero iusto qui odio eveniet minus facere cum?</p>
            </div>
        </div>
        <div class="form_login">
            <form action="../process/Plogin.php" method="POST">
                <h2>LOGIN PAGE</h2>
                <div class="input_btn"><input type="text" name="user" placeholder="USER NAME" required></div>
                <p>this infotmation is required <span>*</span></p>
                <div class="input_btn"><input type="password" name="password" placeholder="PASSWORD" required></div>
                <p>this infotmation is required <span>*</span></p>
                <div class="login_btn2"><button name="submit"> LOGIN </button></div>
            </form>
        </div>
    </div>
</main>

</body>
</html>
