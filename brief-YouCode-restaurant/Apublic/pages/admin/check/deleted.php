<?php
include("../../../includes/dbconnect.php");
if (isset($_POST['submit'])) :
    
    $id = $_POST['id_delete'];
    $query = "DELETE FROM `menuProduct` WHERE id_menu = $id";
    $runquery =  mysqli_query($link, $query);
    if ($runquery) {
        header("location:../dashBoard.php");
    }
endif;

?>

