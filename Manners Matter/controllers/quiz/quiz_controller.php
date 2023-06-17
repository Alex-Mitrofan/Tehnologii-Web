<?php
session_start();
require '../models/challenge_models.php';

if (isset($_POST["Difficulty"]))
{
    $questions=get_question_and_answers(strtolower($_POST["Difficulty"]));
    $_SESSION['mode']=$_POST["Difficulty"];
    $_POST["Difficulty"] = null;
   
} 
require '../views/quiz/quiz.php';
?>