<?php
include("../includes/header.php");
head("../../css/main.css");
include("../process/Plogin.php");
include("../includes/buttons.php");
include("../process/Psign.php");

?>


<main class="sign_box">
    <nav class="nav">
        <?= listMaker("./menu.php", "MENU") ?>
        <?= listMaker("../../index.php", "HOME") ?>
    </nav>
    <div class="wrapper">
        <div class="intro">
            <div class=""></div>
            <div class="">
                <h2>Lorem, ipsum.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum, veritatis aut vero iusto qui odio eveniet minus facere cum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum, veritatis aut vero iusto qui odio eveniet minus facere cum?</p>
            </div>
        </div>
        <div class="">
            <form action="../process/Plogin.php" method="POST">
                
                <input type="text" name="name_" placeholder="USER NAME" required>
                <input type="text" name="lastName_" placeholder="USER NAME" required>
                <input type="email" name="email_" placeholder="USER EMAIL" required>
                <input type="password" name="Upassword" placeholder="PASSWORD" required>
                <input type="password" name="U_password" placeholder="Confirm PASSWORD" required>
                <input name="submit_" value="SIGN UP"  >
            </form>
        </div>
    </div>
</main>

</body>
</html>
