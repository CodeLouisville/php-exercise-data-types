<?php

function convert_to_int($input) {
    if (settype($input, "int")) {
        return $input;
        var_dump($input);
    } else {
        return 0;
        var_dump($input);
}

function convert_to_float($input) {
    if (settype($input, "float")) {
        return $input;
        var_dump($input);
    } else {
        return 0.0;
        var_dump($input);
}

function convert_to_string($input) {
    if (settype($input, "string")) {
        return $input;
        var_dump($input);
    } else {
        return "";
        var_dump($input);
}

function convert_to_bool($input) {
    if (settype($input, "bool")) {
        return $input;
        var_dump($input);
    } else {
        return false;
        var_dump($input);
}

function convert_to_array($input) {
    if (settype($input, "array")) {
        return $input;
        var_dump($input);
    } else {
        return [];
        var_dump($input);
}

function convert_to_null($input) {
    if (settype($input, "null")) {
        return $input;
        var_dump($input);
    } else {
        return null;
        var_dump($input);
}

?>