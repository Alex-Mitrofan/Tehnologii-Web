<?php
session_start();

if(isset($_COOKIE["username"]))
    header('Location: Home', true, 303);

if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) 
    if($_POST["username"] == "alex" && $_POST["password"] == "parola")
    {
        #echo $_POST["username"];
        setcookie("username", $_POST["username"]);
        $_SESSION["user"] = $_POST["username"];
        header('Location: Home', true, 303);
        
    }

require '../views/login.html';
 



?>