<?php

    $string1 = ' Welcome to Web Application Development  ';
    $string2 = 'PHP is easy';
    
    //String functions
    echo strlen($string1) .'<br>';
    echo strlen($string2) .'<br><br>';
    
    echo str_word_count($string1) .'<br>';
    echo str_word_count($string2) .'<br><br>';
    
    echo strrev($string1) .'<br>';
    echo strrev($string2) .'<br><br>';
    
    
    $position = 'i';    
    echo strpos($string1, $position) .'<br>';
    echo strpos($string2, $position) .'<br><br>';
    
    
    $find = 'Web';
    $replace = 'Rapid';
    
    echo str_replace($find, $replace, $string1) .'<br><br>';
    
    
    echo strlen(trim($string1)) .'<br>';
    echo strlen(trim($string2)) .'<br>';
    echo trim($string1, " Welment") .'<br>';
    echo trim($string2, "PH") .'<br><br>';
    
    
    echo $string1 , $string2;
        
?>