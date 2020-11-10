<?php
session_start();
include_once "../model/categorie.php";
$catSearch = new Categorie();
$catName = $_POST['search'];
$resaultSearch = $catSearch->search($catName);
    if ($resaultSearch == true) {
        // header("location: ../../resources/views/layouts/home.php");
        // $row = mysqli_num_rows($resault);
        // echo $row;
        foreach($resaultSearch as $rowRlt){
            echo $rowRlt['id'];
        } 
    }
    