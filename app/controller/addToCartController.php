<?php
session_start();
include_once "../model/cart.php";
$cart = new Cart();
if (isset($_POST['addToCart'])) {
    
    $Pid = $_GET['id'];
    $addToCart = $cart->addToCart($Pid);
    if ($addToCart == true) {
        $_SESSION['carts'] = $addToCart;
        header("location: ../../resources/views/layouts/home.php");
    }
        
}