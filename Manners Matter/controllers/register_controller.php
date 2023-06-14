<?php
session_start();

 
if(isset($_COOKIE["username"]))
    header('Location: Home', true, 303);

require '../views/register.php';
      
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='manners_matter';

$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

setcookie("wrong_username", 'False', time() + 86400); 
$_COOKIE["wrong_username"] = 'False';
setcookie("wrong_password", 'False', time() + 86400); 
$_COOKIE["wrong_password"] = 'False';

 
if (isset($_POST["username"])){
    $sql = "SELECT * FROM users where username='".$_POST["username"]."';";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0){ 
        setcookie("wrong_username", 'True', time() + 86400);
        $_COOKIE["wrong_username"] = 'True';
    }
}

if (isset($_POST["password"]) && isset($_POST["repeat_password"]))
    if ($_POST["password"] != $_POST["repeat_password"] && $_POST["password"] != ''){
 
        setcookie("wrong_password", 'True', time() + 86400); 
        $_COOKIE["wrong_password"] = 'True';
    }

if (!isset($_POST["password"]) || !isset($_POST["repeat_password"]))
    $_COOKIE["wrong_username"] = 'True';
 
 
 
 
if($_COOKIE["wrong_username"] == 'False' &&  $_COOKIE["wrong_password"] == 'False'){
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["last_name"])) {
        $sql = "INSERT INTO `users`(`username`, `password`, `name`, `score`) VALUES ('"
        . $_POST['username'] . "', '"
        . $_POST['password'] . "', '"
        . $_POST['last_name'] . "', 0)";

        $result = mysqli_query($con, $sql);
 
        #setcookie("username", $_POST["username"]);
        #$_SESSION["user"] = $_POST["username"];
        #header('Location: Home', true, 303);
        unset($_POST['username']);
        unset($_POST['password']);
        unset($_POST['repeat_password']);
        unset($_POST['last_name']);

        header('Location: ' . $_SERVER['PHP_SELF']);
    }
}
 
unset($_POST['username']);
unset($_POST['password']);
unset($_POST['repeat_password']);
unset($_POST['last_name']);
 


?>