<?php


function writeSecretSentence(string $param1, string $param2): string
{
    
    $result = $param1 . ' s\'incline devant face à ' . $param2;

    return $result; 

}



echo writeSecretSentence('le loup', 'le feu');

 
