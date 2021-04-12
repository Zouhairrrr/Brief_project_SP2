<?php
include("../../includes/header.php");
head("../../../css/main.css");
include("../../includes/dbconnect.php");
include("../../includes/buttons.php");


session_start();

if (!isset($_SESSION['user']) && $_SESSION['user'] = true) {
    header('location: ../login.php');
    // session_destroy();
} else {
    $requette = "SELECT * FROM menuProduct";
    $query = mysqli_query($link, $requette);
    $data = mysqli_fetch_array($query);
?>
    <main class="m_container">
        <header>
        <nav>
            <div class="nav">
                <ul>
                    <?= listMaker("../../menu.php", "MENU") ?>
                    <?= listMaker("#", "Profile") ?>
                    <?= listMaker("#", "SETTINGS") ?>
                </ul>
            </div>
        </header>
        <div class="addMenu_">
            <a href="ajouter.php"> <i class="fas fa-plus"> ADD NEW PLAT</i></a>
        </div>

        <div class="container_dbrd">
            <div class="form_list">
                <ul>
                    <?= listMaker("../menu.php", "MENU") ?>
                    <?= listMaker("#", "STATISTICS") ?>
                    <?= listMaker("./logout.php","LOG OUT")
                    
                    ?>
                </ul>
            </div>
           
            <div class="menu_modifier">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $requette = "SELECT * FROM menuProduct";
                        $query = mysqli_query($link, $requette);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?= $data['title'] ?></td>
                                <td> <img src="../../images/<?= $data['image'] ?>" style="width: 4.7rem; height:4rem;"></td>
                                <td><?= $data['price'] ?></td>
                                <td>
                                    <form action="./check/deleted.php" method="post">
                                        <input type="hidden" name="id_delete" value="<?= $data['id_menu'] ?>">
                                        <button class="red" style="background:transparent;border:none;padding:.5rem;cursor:pointer" type="submit"  name="submit"><i class="fas fa-trash-alt"></i> DELETE</button>
                                    </form>
                                    <a  style="text-decoration: none;color: black;padding:.5rem;"  href="./check/update.php?id=<?= $data['id_menu'] ?>"><i class="far fa-edit blue"> EDIT</i></a>
                                </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php } ?>


<div id="model1"></div>

</body>
</html>
<style>
    .red:hover{
        color: blueviolet;
    }
    .blue:hover{
        color: blueviolet;
    }
</style>