<?php
include_once('config.php');

class Product extends connect {

    public function __construct(){

        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM products";
        $array = array();
        $query = mysqli_query($this->connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
    public function showProdById($id)
    {
        $sql = "SELECT * FROM products WHERE id ='$id'";
        $data = mysqli_query($this->connection,$sql);
        return $data;
    }   
}