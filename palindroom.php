<?php
    //get the string name fro the API 
    $string= $_GET["string"];
    $isPaindrome="";
    //check if Palindrome
    if (strrev($string) == $string){ 
        $isPaindrome="Palindrome";
    }
    else{
        $isPaindrome=" Not Palindrome";
    }
    $results = [
       $string =>  $isPaindrome
    ];
    //transform into json 
    echo json_encode($results);
?>