<?php
require '../models/ranking_model.php';
if (isset($_GET["id"]))
{
  $page_info=get_first_users_for_page($_GET["id"]);
  $best_of_3=get_first_three_users();
  $_GET["id"]=null;
}
require '../views/ranking.php';
?>