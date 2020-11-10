<?php
include_once "../model/cart.php";
$DeleteCart = new Cart();
if (isset($_GET['D_cart'])) {
    $id = $_GET['D_cart'];
    
    $resault = $DeleteCart->delete($id);
    if($resault == true){
        header('location: ../../resources/views');
    }else{
        echo "Failed to Delete Record";
    }
}
?>