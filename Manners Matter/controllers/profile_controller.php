<?php

if(isset($_COOKIE["username"]) == False){

    header('Location: Home', true, 303);
}

require '../views/profile.html';

?>