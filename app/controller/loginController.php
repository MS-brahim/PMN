<?php
include_once '../model/user.php';
session_start();
$login = new User();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $auth = $login->login($email,$password);
    $rowUser = mysqli_fetch_array($auth);
    if ($auth) {
        if ($rowUser['role']==1) {
            header('location:../../resources/views/admin/dashboard.php');
        }else {
            header('location:../../resources/views');
        }
        $_SESSION['user'] = $rowUser['id'];
    } else {
        header('location:../../resources/views/auth/login.php');
        $_SESSION['message'] = "votre email ou mot de passe inccorect";
    }
}