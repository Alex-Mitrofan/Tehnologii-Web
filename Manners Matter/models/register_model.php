<?php
require 'database_connection.php';

function username_already_used($username){
    global $con;

    $sql = "SELECT * FROM users where username='".$username."';";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0)
        return 1;
    return 0;
}

 
 
function register(){
    global $con;
 
    $sql = "INSERT INTO `users`(`username`, `password`, `name`, `score`) VALUES ('"
    . $_POST['username'] . "', '"
    . $_POST['password'] . "', '"
    . $_POST['last_name'] . "', 0)";

    $result = mysqli_query($con, $sql);

}
    
 
 
?>