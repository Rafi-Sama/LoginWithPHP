<?php require_once 'database/_dbconnect.php'; ?>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $err = "";
    include 'database/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $exists = false;
    
    $sql = "Select * from users where username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");
    }
    else {
        $showError = "Invalid Credentials";
    }

}
?>