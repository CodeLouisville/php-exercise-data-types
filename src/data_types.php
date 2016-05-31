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
    if (settype($input, "string")) {
        return $input;
    } else {
        return "";
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
        return [];
    }
}

function convert_to_null($input) {
    if (settype($input, "null")) {
        return $input;
    } else {
        return null;
    }
}

?>