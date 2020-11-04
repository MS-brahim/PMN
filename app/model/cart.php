<?php
include_once "config.php";
class Cart extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    public function addToCart($Pid)
    {
        $sql = "INSERT INTO orders (product_id) VALUES ($Pid)";
        mysqli_query($this->connection,$sql);
        return true;
    }
    public function showCart($idCart)
    {
        $sql ="SELECT * FROM orders O
            INNER JOIN products P ON P.id = O.product_id
            WHERE  O.id = '$idCart' AND O.status = 0";
        $array = array();
        $query = mysqli_query($this->connection,$sql);
        
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
}
