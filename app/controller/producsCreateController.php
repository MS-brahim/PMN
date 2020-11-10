<?php
include_once "../model/product.php";
session_start();
$prod = new Product();
if (isset($_POST['createProd'])) {
    $title = $prod->santString($_POST['title']);
    $descrip = $prod->santString($_POST['description']);
    $price = $prod->santString($_POST['price']);
    $oldP = $prod->santString($_POST['oldPrice']);
    $image = $_POST['image'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $stock = $prod->santString($_POST['stock']);
    $U_id = $_SESSION['user'];
    $cat_id = $_POST['categorie_id'];

    $resault = $prod->prodCreate($title, $descrip, $price, $oldP, $image, $image1, $image2, $image3, $stock, $U_id, $cat_id);

    if ($resault == false) {
        $_SESSION['message'] = "Erreur, veuillez vérifier la saisie des informations sur le produit";
        header("location:../../resources/views/admin/productsCreate.php");
    }else{
        header("location:../../resources/views/admin/productsList.php");
        $_SESSION['message'] = "L'article a été saisi avec succès";
    }
}