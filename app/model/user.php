<?php
include_once('config.php');

class User extends connect {

    public function __construct(){

        parent::__construct();
    }

    public function login($email,$password,$role)
    {
        $sql = "SELECT email, password, role FROM users WHERE email = '$email' AND password = '$password' and role='$role'";
        $resault = $this->connection->query($sql);
        if ($resault->num_rows>0) {
            return true;            
        }
    }

    // public function register($firstname,$lastname,$email,$password)
    // {
    //     if (empty($firstname) or empty($lastname) or empty($email) or empty($password)) {
    //         return false;
    //     }else {
    //         $sql = mysqli_query($this->connection,"SELECT email FROM users WHERE email = '$email'");
    //         if (mysqli_num_rows($sql)>0) {
    //             header('location:../../resources/views/auth/register.php');
    //         }else {
    //             $sql = "INSERT INTO users (firstname, lastname, email, password) 
    //             VALUES ('$firstname', '$lastname', '$email', '$password')";
    //             if(mysqli_query($this->connection,$sql)){
    //                 return true;
    //             }else{
    //                 die("Error : ".mysqli_error($this->connection));
    //             }
    //         }
    //     }
    // }
    
}