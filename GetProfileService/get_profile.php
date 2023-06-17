<?php

require 'database_connection.php';

function get_profile($username){
    global $con;
    
    $sql = "SELECT * FROM users where username='".$username."';";
    $result = mysqli_query($con, $sql);

    $arr = [];
        while ($inreg = $result->fetch_assoc()) {
            $arr[] = $inreg['username'];
            $arr[] = $inreg['rank'];
            $arr[] = $inreg['score'];
            $arr[] = $inreg['name'];
            $arr[] = $inreg['location'];
            $arr[] = $inreg['age'];
            $arr[] = $inreg['sex'];
            $arr[] = $inreg['ocupation'];
            $arr[] = base64_encode($inreg['avatar']);
        }

    $json = json_encode($arr);
    echo $json;
     
    #echo '<img src="data:image/png;base64,' . $arr[8] . '" alt="Image">';
    return $json;
            
    }

 


?>