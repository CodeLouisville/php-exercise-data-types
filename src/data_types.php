<?php
function convert_to_int($input) {
    return intval($input);
}

function convert_to_float($input) {
    return floatval($input);
}

function convert_to_string($input)  {
    if (is_array ($input)) { 
        $input = implode(", ", $input);
    } else {
        $input = strval($input);
    }
    return $input;
}

function convert_to_bool($input)  {
    if ($input) {
        return true;
    } else {
        return false;
    }
}

function convert_to_array($input)  {
    if (is_array($input)) {
        return $input;
    } else {
        return array($input);
    }
}

function convert_to_null($input)  {
    if ($input === null) {
        return null;
    } else {
        return $input;
    }
}

$test = [2,3];

var_dump( convert_to_array($test) );

?>
