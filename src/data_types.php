<?php 


function convert_to_int($test){
    $int = intval($test);
    if (is_int($int) == true ){
        return $int;
    } else return 0;    
}


function convert_to_float($test){
    $float = floatval($test);
    if ( is_float($float) == true ){
        return $float;
    } else return "0.0";
}


function convert_to_string($test){
    $string = strval($test);
    if ( is_string($string) == true ){
        return $string;
    } else return " ' ' ";
}


function convert_to_bool($test){
    $bool = boolval($test);
    if ( $bool === true ){
        return "true";
    } else return "false";
}


function convert_to_array($test){
    $array = str_split(strval($test));
    if ( is_array($array) == true ){
        return $array;
    } else return "[]";
}
    

function convert_to_null($test){
    $test = NULL;
    if ( is_null($test) == true ){
        return $test;
    } else return "null";
}


?>

