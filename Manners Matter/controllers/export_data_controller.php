<?php
require "../models/profile_model.php";
$arr = get_user($_COOKIE["username"]);

$username = $arr[0];
$rank = $arr[1];
$score = $arr[2];
$name = $arr[3];
$location = $arr[4];
$age = $arr[5];
$sex = $arr[6];
$ocupation = $arr[7];
$avatar = $arr[8];
 

$fileContent = "username: " . $username . 
                "\nrank: " . $rank . 
                "\nscore: " . $score . "xp" .
                "\nname: " . $name . 
                "\nlocation: " . $location . 
                "\nage: " . $age .
                "\nsex: " . $sex . 
                "\nocupation: " . $ocupation . 
                "\navatar: " . $avatar;

$fileName = "data.txt";

 
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$fileName);

 
echo $fileContent;
exit;
?>