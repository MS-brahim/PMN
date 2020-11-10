<?php
include_once "../model/product.php";
$DeleteProd = new Product();
if (isset($_GET['D_ID'])) {
    $id = $_GET['D_ID'];
    
    $res = $DeleteProd->delete($id);
    if($res == true){
        header('location: ../../resources/views/admin/productsList.php');
    }else{
        echo "Failed to Delete Record";
    }
}
?>