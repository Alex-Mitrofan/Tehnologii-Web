<?php
require '../models/profile_model.php';

if(isset($_COOKIE["username"]) == True){
    $arr = get_students($_COOKIE["username"]);
    $avatar = $arr[8];
  }
require '../views/articles/general_rules.php';

?>