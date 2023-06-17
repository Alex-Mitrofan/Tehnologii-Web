<?php
$conn=new mysqli(
    'localhost', // locatia serverului (aici, masina locala)
    'root',       // numele de cont
    '',    // parola (atentie, in clar!)
    'manners_matter',   // baza de date
);
if (mysqli_connect_errno()) {
    die ('Eror connection database challenge_model...');
}
function get_score_and_set($score,$name_user)
{
    global $conn;
    if (!($qer=mysqli_query($conn,'select * from questions where lower(dificulty)=\''..'\' order by rand() limit 5')))
    {
        die("Eror query challenge_model.php");
    }
  
}
function permutation_question($question)
{
    $keys = array_keys($question);
    shuffle($keys);

    $result = [];
    foreach ($keys as $key) {
        $result[$key] = $question[$key];
    }

    return $result;
}
function get_question_and_answers($difficulty)
{
     global $conn;
     $result=[];
     if ($difficulty!='practice')
     {
       if (!($qer=mysqli_query($conn,'select * from questions where lower(dificulty)=\''.$difficulty.'\' order by rand() limit 5')))
       {
           die("Eror query challenge_model.php");
       }
       $k=1;
       while($rez=$qer->fetch_assoc())
       {
        $result[$k++]=$rez;
       }
     }
     else
     {
       if (!($qer=mysqli_query($conn,'select * from questions order by rand() limit 5')))
       {
           die("Eror query challenge_model.php");
       }
       $k=1;
       while($rez=$qer->fetch_assoc())
       {
        $result[$k++]=$rez;
       }
     }


     return $result;
}

?>