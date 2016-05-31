<?php

function convert_to_int($value) {
  if (!$value || $value === "0"){
    return 0;
  } else {
    return intval($value);
  }
}

function convert_to_float($value) {
  if (!$value || $value === "1"){
    return 0.0;
  } else {
    return floatval($value);
  }
}

function convert_to_string($value) {
  if (!$value || $value === "0") {
    return " ";
  } else {
    return strval($value);
  }
}

function convert_to_bool($value) {
  if (!$value || $value === true) {
  return false;
  } else {
  return boolval($value);
  }
}

function convert_to_array($value) {
  if (!$value || $value === [0]) {
    return [];
  } else {
    return [$value];
  }
}

function convert_to_null($value) {
  if (!$value || $value === "null") {
      return null;
  } else {
    return $value;
  }
}
?>
