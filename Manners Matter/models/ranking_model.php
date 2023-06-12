<?php

//Connection to database Users

$conn=new mysqli(
    'localhost', // locatia serverului (aici, masina locala)
    'root',       // numele de cont
    '',    // parola (atentie, in clar!)
    'web project database',   // baza de date
);
if (mysqli_connect_errno()) {
    die ('Eror connection database rankin_model...');
}
// arry of 6 people whit name ,score image 
function get_first_three_users()
{
  global $conn;
  $result=[];
  if (!($first3=mysqli_query($conn,'select * from users order by score desc')))
  {
    die('Eror first 3 query ranking model');
  }
  else
  {
     $nr=0;
     while($rez=$first3->fetch_assoc())
     {
      if ($nr==3)
      {
        break;
      }
      $nr+=1;
      $values=[];
      $values["username"]=$rez["username"];
      $values["profile_image"]=$rez["profile_image"];
      $result[$nr]=$values;
     }
  }
  return $result;
}
function get_first_users_for_page($number_page)
{ 
   global $conn;
   $result=[];
   if (!($nr_colums=mysqli_query($conn,'select count(*) from users')))
   {
     die ('Eror count query ranking_model');
   }
   $nr_colums=mysqli_fetch_row($nr_colums)[0];
   if (6*$number_page>=$nr_colums)
   {
    //get last users 
    if (!($last_users_info=mysqli_query($conn,'select * from users order by score asc')))
    {
      die ('Eror info last  query ranking_model');
    }
    else
    {
        if ($nr_colums%6==0)
        {
           $ok=6;
        }
        else
        {
           $ok=$nr_colums%6;
        }
        $nr=0;
        while($rez=$last_users_info->fetch_assoc())
        {
           if ($nr==$ok)
           {
             break;
           }
           $values=[];
           $values["username"]=$rez["username"];
           $values["score"]=$rez["score"];
           $values["rank"]=$rez["rank"];
           $values["profile_image"]=$rez["profile_image"];
           $result[$nr_colums-$nr]=$values;
           $nr+=1;
        }
        $result=array_reverse($result,true);
    }
   }
   else
   {
    if (!($user_page_info=mysqli_query($conn,'select * from users order by score desc')))
    {
      die ('Eror info user page  query ranking_model');
    }
    else
    {
      $nr=6;
      if ($number_page==1)
      {
        $index_begin=1;
      }
      else
      {
        $index_begin=($number_page-1)*6;
      }
      $k=1;
      while ($rez=$user_page_info->fetch_assoc())
      {
        if ($nr==0)
        {
          break;
        }
        if ($k==$index_begin)
        {
          $values=[];
          $values["username"]=$rez["username"];
          $values["score"]=$rez["score"];
          $values["rank"]=$rez["rank"];
          $values["profile_image"]=$rez["profile_image"];
          $result[$index_begin]=$values;
          $nr-=1;
          $index_begin+=1;  
        } 
        $k+=1;

      }
    }
   }

  return $result;
}

?>