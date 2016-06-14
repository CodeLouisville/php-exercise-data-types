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

function convert_to_string($input) {
  if(is_array($input)) {
    $conval = implode(", ", $input);
  }  else if (!$input){
    $conval = '';
  } else {
    $conval = strval($input);
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
    if(!$input || $input === 'null') {
      return null;
    } else {
      return $input;
    }
  }

  ?>
