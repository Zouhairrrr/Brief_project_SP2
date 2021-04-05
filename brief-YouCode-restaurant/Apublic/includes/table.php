<?php
include("./dbconnect.php");
?>
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
            <td> <img src="../../images/<?= $data['image'] ?>" style="width: 80px;"></td>
                <td><?= $data['title'] ?></td>
                <td> <img src="../../images/<?= $data['image'] ?>" style="width: 80px;"></td>
                <td><?= $data['price'] ?></td>
                <td>
                    <form action="">
                        <input type="button" id="delete" name="delete" value="DELETE">
                    </form>
                    <form action="">
                        <input type="hidden" name="id" value="<?= $data['id_menu'] ?>">
                        <input type="button" class="test" id="edit" name="edit" value="EDIT">
                    </form>
                </td>
            </tr>
    </tbody>
<?php }; ?>
</table>