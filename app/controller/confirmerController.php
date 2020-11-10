<?php 
    @$order_id = $_GET['idcart'];
    $idU = $_SESSION['user'];
    if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
        header('location:../auth/register.php?lastOrderID='.$order_id.'');
    }else{
        include_once "../../../app/model/order.php";
        $order = new Order();
        $resault = $order->ConfirmerCMD($idU,$order_id);
        if ($resault == true) {
            echo '<div class="alert alert-success" role="alert">
                    <strong>Votre demande a été ajoutée avec succès</strong>
                </div>';
        }
    }
