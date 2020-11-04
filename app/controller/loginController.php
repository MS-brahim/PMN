<?php
include_once '../model/user.php';
session_start();
$login = new User();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $auth = $login->login($email,$password,$role);

    if ($auth) {
        if ($role===1) {
        header('location:../../resources/views/admin/dashboard.php');
        exit;
        }else {
        header('location:../../resources/views/layouts/home.php');
        }
        
    } else {
        header('location:../../resources/views/auth/login.php');
        $_SESSION['message'] = "votre email ou mot de passe inccorect";
    }
}