<?php
// include_once '../model/user.php';
// session_start();

// $register = new User();
// if (isset($_POST['submit'])) {
//     $firstname = htmlspecialchars($_POST['firstname']);
//     $lastname = htmlspecialchars($_POST['lastname']);
//     $email = htmlspecialchars($_POST['email']);
//     $password = $_POST['password'];
//     $pwd = $_POST['pwd'];

//     $auth = $register->register($firstname,$lastname,$email,$password);
//     if (!$auth) {
//         header('location:../../resources/views/auth/register.php');
//         $_SESSION["message"] = "Error msg";

//     }else {
//         header('location:../../resources/views/auth/login.php');
//     }
// }