<?php

function convert_to_int($input)
{
    $modInput = intval($input);
    if (is_int($modInput)) {
        return $modInput;
    } else {
        return 0;
    }
}

function convert_to_float($input)
{
    $modInput = floatval($input);
    if (is_float($modInput)) {
        return $modInput;
    } else {
        return 0.0;
    }
}

function convert_to_string($input)
{
    if (is_array($input)) {
        $modInput = implode(", " , $input);
        return $modInput;
    } else {
        $modInput = strval($input);
        if (is_string($modInput)) {
            return $modInput;
        } else {
            return "";
        }
    }
}

function convert_to_bool($input)
{
    $modInput = boolval($input);
    if (is_bool($modInput)) {
        return $modInput;
    } else {
        return false;
    }
}

function convert_to_null($input)
{
    if ($input === null || $input === 'null' || $input === 0 || $input === false || $input === 0.0 || $input === '' || $input === '0') {
        return null;
    } else {
        return $input;
    }
}

function convert_to_array($input)
{
    if (is_array($input)) {
        return $input;
    } elseif (is_null($input)) {
 +        return [];
 +      } else {
            return array($input);
        }    
}
 ?>
