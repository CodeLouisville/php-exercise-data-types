<?php

//Could also try intval(), floatval(), etc.

function convert_to_int($input) {
    $conversion = (int) $input;

    if (is_int($conversion)) {
        return $conversion;
    } else {
        return 0;
    }
}

function convert_to_float($input) {
    $conversion = (float) $input;

    if (is_float($conversion)) {
        return $conversion;
    } else {
        return 0.0;
    }
}

function convert_to_string($input) {
    if (is_array($input)) {
        $comma_separated = implode(', ', $input);

        return $comma_separated;
    } else {
        $conversion = (string) $input;

        if (is_string($conversion)) {
            return $conversion;
        } else {
            return '';
        }
    }
}

function convert_to_bool($input) {
    $conversion = (bool) $input;

    if (is_bool($conversion)) {
        return $conversion;
    } else {
        return false;
    }
}

function convert_to_array($input) {
    $conversion = (array) $input;

    if (is_array($conversion)) {
        return $conversion;
    } else {
        return [];
    }
}

//function convert_to_null($input) {
//    $conversion = (unset) $input;
//
//    if (is_null($conversion)) {
//        return $conversion;
//    } else {
//        return null;
//    }
//}

//null #2
function convert_to_null($input) {
//    if (is_null($input) || $input == 'null') {
//        return null;
//    }
//    
//    $conversion = (unset) $input;
//    if (is_null($conversion)) {
//        return $conversion;
//    } else {
//        return null;
//    }
    return null;
}