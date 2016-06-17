<?php

function convert_to_int($input) {
    if (settype($input, "int")) {
        return $input;
    } else {
        return 0;
    }
}

function convert_to_float($input) {
    if (settype($input, "float")) {
        return $input;
    } else {
        return 0.0;
    }
}

function convert_to_string($input) {
    if (is_array($input)) {
        return implode(", ", $input);
    } elseif (!is_string($input)) { //do falsy check
        return "";
    } else { //return string value
        return $input;
    }
}

function convert_to_bool($input) {
    if (settype($input, "bool")) {
        return $input;
    } else {
        return false;
    }
}

function convert_to_array($input) {
    if (settype($input, "array")) {
        return $input;
    } else {
        return array();
    }
}

function convert_to_null($input) {
    if (!$input || $input === 'null') {
        return null;
    } else {
        return $input;
    }
}

?>