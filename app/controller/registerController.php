<?php
include_once '../model/user.php';
session_start();

$register = new User();
if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = $_POST['password'];
    $pwd = $_POST['pwd'];
    $address = htmlspecialchars($_POST['address']);
    $country = htmlspecialchars($_POST['country']);
    $city = htmlspecialchars($_POST['city']);
    $zipecode = htmlspecialchars($_POST['zipcode']);

    $auth = $register->register($firstname,$lastname,$email,$phone,$password,$address,$country,$city,$zipecode);
    if (!$auth) {
        header('location:../../resources/views/auth/register.php');
        $_SESSION["message"] = "Error msg";

    }else {
        $auth = $register->login($email,$password);
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
}