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

    <main>
        <header>
            <nav>
                <ul>
                    <?= listMaker("../pages/menu.php", "MENU") ?>
                    <?= listMaker("#", "SETTINGS") ?>
                    <?= listMaker("#", "PROFILE") ?>
                </ul>
            </nav>
        </header>
        <div class="container_dbrd">
            <div class="form_list">
                <ul>
                    <?= listMaker("../menu.php", "MENU") ?>
                    <?= listMaker("#", "STATISTICS") ?>
                    <?= listMaker("./logout.php","LOG OUT")
                    
                    ?>
                </ul>
            </div>
            <div>
                <a href="ajouter.php">ajouter menu</a>
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
                                <td> <img src="../../images/<?= $data['image'] ?>" style="width: 80px;"></td>
                                <td><?= $data['price'] ?></td>
                                <td>
                                    <form action="./check/deleted.php" method="post">
                                        <input type="hidden" name="id_delete" value="<?= $data['id_menu'] ?>">
                                        <button type="submit"  name="submit">delete</button>
                                    </form>
                                    <a href="./check/update.php?id=<?= $data['id_menu'] ?>">edit</a>
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
