<?php
session_start();
 
 
if(isset($_POST["username"]) && isset($_POST["password"])){

    require '../models/login_model.php';
    $result = search_username_password($_POST["username"], $_POST["password"]);

    if($result == 1){
        setcookie("username", $_POST["username"]);
        $_SESSION["user"] = $_POST["username"];
        header('Location: Home', true, 303);
    }
}

require '../views/login.html';
 

?>