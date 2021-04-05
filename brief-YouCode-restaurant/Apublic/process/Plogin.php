<?php
session_start();
include('../includes/dbconnect.php');
$login = $_POST['login'];
if (isset($login)) {
    header("location:../pages/login.php");
};

if (isset($_POST['submit'])) {

    $username = htmlentities($_POST['user']);
    $pwd = htmlentities($_POST['password']);
    $login_query = "SELECT * FROM admin WHERE UserName = '$username' and PSSWRD =  '$pwd'";
    $quey = mysqli_query($link, $login_query);
    $result = mysqli_fetch_array($quey);
    if ($result) {
        $_SESSION['user'] = $result['UserName'];
        header('location: ../pages/admin/dashBoard.php');
    } else {
        header('location: ../pages/login.php');
        echo 'password and email incorect';
    };
};
