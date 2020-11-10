<?php
include_once('config.php');

class User extends connect {

    public function __construct(){

        parent::__construct();
    }

    public function login($email,$password)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $resault = $this->connection->query($sql);
        if ($resault->num_rows>0) {
            return $resault; 
        }
    }

    public function register($firstname,$lastname,$email,$phone,$password,$address,$country,$city,$zipecode)
    {
        if (empty($firstname) or empty($lastname) or empty($email) or empty($password)) {
            return false;
        }else {
            $sql = mysqli_query($this->connection,"SELECT email FROM users WHERE email = '$email'");
            if (mysqli_num_rows($sql)>0) {
                header('location:../../resources/views/auth/register.php');
            }else {
                $sql = "INSERT INTO users (firstname, lastname, email, phone, password, address, country, city, zipcode) 
                VALUES ('$firstname', '$lastname', '$email', '$phone', '$password', '$address', '$country', '$city','$zipcode')";
                if(mysqli_query($this->connection,$sql)){
                    return true;
                }else{
                    die("Error : ".mysqli_error($this->connection));
                }
            }
        }
    }

    public function sessionUser($sql)
    {
        $query = $this->connection->query($sql);
        $row = $query->fetch_array();
        return $row;  
    }
    
    public function select()
    {
        $sql = "SELECT * FROM users";
        $array = array();
        $query = mysqli_query($this->connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
}