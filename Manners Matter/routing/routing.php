<?php


$arr = explode("/", $_SERVER['REQUEST_URI'] );


if (in_array("About", $arr))
    require '../controllers/about_controller.php';
elseif (in_array("Advices", $arr))
    require '../controllers/advices_controller.php';
elseif (in_array("Challenge", $arr))
    require '../controllers/challenge_controller.php';
elseif (in_array("Contact", $arr))
    require '../controllers/contact_controller.php';
elseif (in_array("Home", $arr))
    require '../controllers/index_controller.php';
elseif (in_array("Login", $arr))
    require '../controllers/login_controller.php';
elseif (in_array("Profile", $arr))
    require '../controllers/profile_controller.php';
elseif (in_array("Ranking", $arr))
    require '../controllers/ranking_controller.php';
elseif (in_array("Register", $arr))
    require '../controllers/register_controller.php';
#ARTICLES
elseif (in_array("Email", $arr))
    require '../controllers/articles/email_controller.php';
elseif (in_array("Emoji", $arr))
    require '../controllers/articles/emoji_controller.php';
elseif (in_array("General%20Rules", $arr))
    require '../controllers/articles/general_rules_controller.php';
elseif (in_array("Interview", $arr))
    require '../controllers/articles/interview_controller.php';
elseif (in_array("Video%20Conference", $arr))
    require '../controllers/articles/video_conference_controller.php';

#QUIZ

elseif (in_array("Quiz", $arr))
    require '../controllers/quiz/q1_controller.php';

else
    echo "Wrong Address"

?>