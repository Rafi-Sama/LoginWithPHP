<?php
session_start();

class Connection{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "users";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}

class Register extends Connection{
    public function registration($username,$password,$cpassword){
        $duplicate = mysqli_query($this->conn,"SELECT * FROM users WHERE username = '$username'");
        if(mysqli_num_rows($duplicate) > 0){
            return "Username Already Exists";
        }
        else {
            if($password == $cpassword){
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
                mysqli_query($this->conn,$sql);
                return "Successful";
            }
            else{
                return "Passwords unmatched!";
            }
        }
    }
}

class Login extends Connection{
    public $id;
    public function login($username,$password){
        $result = mysqli_query($this->conn,"SELECT * FROM users WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if(password_verify($password,$row["password"])){
                $this->id = $row["id"];
                return 1;
            }
            else {
                return "Wrong Credentials";
            }
        }
        else {
            return "Wrong Credentials";
        }
    }

    public function idUser(){
        return $this->id;
    }
}