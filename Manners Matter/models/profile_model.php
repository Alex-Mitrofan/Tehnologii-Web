<?php


function get_students($username){
    define ('URL', 'http://localhost/Manners%20Matter/Tehnologii-Web/GetProfileService/get_profile/' . $username);
    

    $c = curl_init();
    curl_setopt ($c, CURLOPT_URL, URL);
    curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec  ($c);
    curl_close($c);
    #echo $res;
    $decode =  json_decode($res);
    $res = [];

    foreach($decode as $element){
        array_push($res, $element);
    }
 
    return $res;
    
}   