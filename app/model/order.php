<?php
include_once "config.php";
class Order extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function ConfirmerCMD($idU,$idCart)
    {
        $sql ="UPDATE orders SET user_id = '$idU', status = 1 WHERE id = '$idCart'";
        $resault = mysqli_query($this->connection,$sql);
        if($resault){
            return true;
        }else{
            return false;
        }
    }
    public function select()
    {
        $sql = "SELECT * FROM orders O
        INNER JOIN products P ON P.id = O.product_id
        INNER JOIN users U ON U.id = O.user_id
        WHERE status = 1";
        $query = mysqli_query($this->connection,$sql);
        return $query;
    }
    
}