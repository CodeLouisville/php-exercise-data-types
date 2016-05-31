<?php

function convert_to_int($input = null) {
  if($input > 0) {
    $conval = intval($input);
  } else {
    $conval = "0";
}
  return $conval;
}

function convert_to_float($input = null) {
  if($input > 0) {
    $conval = floatval($input);
  } else {
  $conval = "0.0";
}
  return $conval;
  }

function convert_to_string($input = null) {
  if(is_array($input)) {
    $conval = implode(", ", $input);
  } else if($input) {
    $conval = strval($input);
} else {
  $conval = $input;
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

function convert_to_array($input = array(1,2,3,4)) {
  if(is_array($input)) {
    $conval = $input;
  } else if($conval = null) {
    $conval = null;
  }

  return $conval;
}

  function convert_to_null($input = null){
    if(is_null($input)) {
      $conval = null;
    } else {
      $conval = $input;
    }
    retrun $conval;
  }
?>
