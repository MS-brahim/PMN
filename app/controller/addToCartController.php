<?php
include_once "../model/cart.php";
$cart = new Cart();
if (isset($_POST['addToCart'])) {
    $qty = $_POST['qty'];
    $Pid = $_GET['id'];
    $orderID = $cart->addToCart($Pid,$qty);
    if ($orderID) {
        header("location: ../../resources/views/layouts/cart.php?idcart=".$orderID."");
    }

}