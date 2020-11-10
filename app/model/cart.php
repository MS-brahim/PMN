<?php
include_once "config.php";
class Cart extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    public function addToCart($Pid, $qty)
    {
        $sql = "INSERT INTO orders (product_id, qty) VALUES ($Pid, $qty)";
        mysqli_query($this->connection,$sql);
        $orderID = $this->connection->insert_id;
        return $orderID;
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
    // method delete cart 
    public function delete($id){
        $sql = "DELETE FROM orders WHERE id = '$id'";
        $resault = mysqli_query($this->connection, $sql);
        if($resault){
            return true;
        }else{
            return false;
        }
    }
}
