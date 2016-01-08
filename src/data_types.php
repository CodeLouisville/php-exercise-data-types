<?php
function convert_to_int($value) {
    return (int)$value;
}

function convert_to_float($value) {
    return (float)$value;
}

function convert_to_array($value) {
    return (array)$value;
}

function convert_to_bool($value) {
    return !!$value;
}

function convert_to_string($value) {
    if (is_array($value)) {
        return implode(', ', $value);
    }

    return (string)$value;
}

function convert_to_null($value) {
    if (!$value || $value === 'null') {
        return null;
    }

    return $value;
}