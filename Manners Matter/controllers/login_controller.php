<?php
session_start();

if(isset($_COOKIE["username"]))
    header('Location: Home', true, 303);

     
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='manners_matter';

$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(isset($_POST["username"]) && isset($_POST["password"])){
    $sql = "SELECT * FROM users where username='".$_POST["username"]."' and password='".$_POST["password"]."';";
    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) > 0) 
        {
            #echo $_POST["username"];
            setcookie("username", $_POST["username"]);
            $_SESSION["user"] = $_POST["username"];
            header('Location: Home', true, 303);
            
        }

}

require '../views/login.html';
 



?>