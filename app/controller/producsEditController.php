<?php
include_once "../model/product.php";

$editProd = new Product();

if (isset($_POST['editProd'])) {
    $title = $editProd->santString($_POST['title']);
    $description = $editProd->santString($_POST['description']);
    $price = $editProd->santString($_POST['price']);
    $oldP = $editProd->santString($_POST['oldPrice']);
    $image = $_POST['image'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $stock = $editProd->santString($_POST['stock']);
    $id = $_GET['U_ID'];
    $cat_id = $_POST['categorie_id'];
    
    $resault = $editProd->prodEdit($id, $title, $description, $price, $oldP, $image, $image1, $image2, $image2, $stock, $cat_id);
    if ($resault == true) {
        header('location: ../../resources/views/admin/productsList.php');
        
    }
}