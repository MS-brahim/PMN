<?php
include_once('config.php');

class Product extends connect {

    public function __construct(){

        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM products";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
    public function showProdById($id)
    {
        $sql = "SELECT * FROM products WHERE id ='$id'";
        $data = mysqli_query($this->connection,$sql);
        return $data;
    }   
    // method create new prod 
    public function prodCreate($title, $descrip, $price, $oldP, $image, $image1, $image2, $image3, $stock, $U_id, $cat_id)
    {
        if(empty($title) or empty($descrip)){
            return false;
        }else{
            $sql = "INSERT INTO products (title, description, price, oldPrice, image, image1, image2, image3, stock, user_id, categorie_id) 
                    VALUES ('$title', '$descrip', '$price', '$oldP', '$image', '$image1', '$image2', '$image3', '$stock', '$U_id', '$cat_id')";
            if(mysqli_query($this->connection,$sql)){
                return true;
            }else{
                die("Error : ".mysqli_error($this->connection));
            }
        }
    }
    // method delete product 
    public function delete($id){
        $sql = "DELETE FROM products WHERE id = '$id'";
        $resault = mysqli_query($this->connection, $sql);
        if($resault){
            return true;
        }else{
            return false;
        }
    }
    // method update product 
    public function prodEdit($id, $title, $description, $price, $oldP, $image, $image1, $image2, $image3, $stock, $cat_id)
    {
        $sql ="UPDATE  products 
            SET title = '$title', 
            description = '$description', 
            price = '$price', 
            oldPrice = '$oldP', 
            image = '$image', 
            image1 = '$image1', 
            image2 = '$image2', 
            image3 = '$image3', 
            stock = '$stock', 
            categorie_id = '$cat_id' 
            WHERE id = '$id'";
        $resault = mysqli_query($this->connection,$sql);
        if($resault){
            return true;
        }else{
            return false;
        }
    }
    // method fliter value 
    public function santString($value){
        $str = trim($value);
        $str = filter_var($str,FILTER_SANITIZE_STRING);
        return $str;
    }
}