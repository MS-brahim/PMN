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
        $array = array();
        $query = mysqli_query($this->connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
}
