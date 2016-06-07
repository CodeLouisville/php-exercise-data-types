<?php

function convert_to_int($value) {
  if (!$value){
    return 0;
  } else {
    return intval($value);
  }
}

function convert_to_float($value) {
  if (!$value){
    return 0.0;
  } else {
    return floatval($value);
  }
}

function convert_to_string($value) {
  if (!$value) {
    return "";
  } else if (is_array($value)) {
    return implode(", ", $value);
  } else {
    return strval($value);
  }
}

function convert_to_bool($value) {
  if (!$value) {
  return false;
  } else {
  return boolval($value);
  }
}

//function convert_to_array($value) {
//  if (!$value) {
//    return [];
//  } else if (is_array($value)) {
//    return $value;
//  } else {
//    return [$value];
//  }
//}
//var_dump (convert_to_array(''));

function convert_to_array ($value) {
  if (!$value) {
    return [];
} else {
  return (array)$value;
}

//var_dump (convert_to_array(''));

function convert_to_null($value) {
  if (!$value || $value === "null") {
      return null;
  } else {
    return $value;
  }
}
//var_dump (convert_to_int(4.2), convert_to_float(4.2), convert_to_string([4, 5, 6]), convert_to_bool(4.2), convert_to_array(4.2), convert_to_null(4.2));
?>
