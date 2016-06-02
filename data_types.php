<?php

function convert_to_int($input) {
  if($input > 0) {
    $conval = intval($input);
  } else {
    $conval = 0;
}
  return $conval;
}

function convert_to_float($input) {
  if($input > 0) {
    $conval = floatval($input);
  } else {
  $conval = 0.0;
}
  return $conval;
  }

function convert_to_string($input = '') {
  if(is_array($input)) {
    $conval = implode(", ", $input);
  } else if($input) {
    $conval = strval($input);
  } else {
  $conval = '';
}
  return $conval;
}

function convert_to_bool($input = null) {
  if($input) {
    $conval = boolval($input);
  } else {
    $conval = false;
}
  return $conval;
}

function convert_to_array($input = 0) {
  if(!is_array($input)) {
    $conval = (array) $input;
  } else {

    $conval = $input;
  }
    return $conval;
}

  function convert_to_null($input){
    if(is_null($input)) {
      $conval = null;
    } else {
      $conval = $input;
    }
    return $conval;
  }
  ?>
