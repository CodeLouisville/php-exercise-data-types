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

function convert_to_string($input = null) {
  if(is_array($input)) {
    $conval = implode(", ", $input);
  } elseif ($input == null || !$input) {
      $conval = null;
  } elseif ($input){
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

function convert_to_array($input) {
  if($input === null) {
    return [];
  } else if(is_array($input)) {
    return  $input;
  } else {
    return [$input];
  }
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
