<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function convert_to_int ($input) {  
    return (int)$input;
}

function convert_to_float ($input) {
    return floatval($input);   
}
function convert_to_string($input) {
    return (string)$input;
}
function convert_to_bool($input) {
    return (bool)$input;
}
function convert_to_array($input) {
    return (array)$input;
}

function convert_to_null($input) {
    return NULL;
}

var_dump (convert_to_null(3333));
?>