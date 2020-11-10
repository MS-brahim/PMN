<?php
include_once "config.php";
class Categorie extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    public function select($table)
    {
        $sql = "SELECT * FROM ".$table;
        $query = mysqli_query($this->connection,$sql);
        return $query;
    }
    public function search($catName)
    {
        $sql = "SELECT * FROM categories C
        INNER JOIN products P ON P.categorie_id = C.id
        WHERE C.name = '$catName'";
        $query = mysqli_query($this->connection,$sql);
        return $query;
    }
}
