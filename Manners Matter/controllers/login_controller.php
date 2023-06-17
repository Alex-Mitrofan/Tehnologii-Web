<?php
session_start();

require '../models/login_model.php';
login();
require '../views/login.html';
 

?>