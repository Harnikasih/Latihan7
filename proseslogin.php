<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    if (password_verify($password, $hashed_passwod_from_database)){
        session_start();
        $_SESSION["username"] = $username;
        header("location: dashboard.php");
    }else{
        echo "Username atau password salah. Coba lagi.";
    }
}
?>