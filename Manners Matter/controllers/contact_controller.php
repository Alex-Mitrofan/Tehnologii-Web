<?php
require '../models/contact_model.php';
if (isset($_POST["email"]) && isset($_POST["message"]))
{
   send_the_feedback($_POST["email"],$_POST["message"]);
   $_POST["email"]=null;
   $_POST["message"]=null;
}
require '../views/contact.html';

?>