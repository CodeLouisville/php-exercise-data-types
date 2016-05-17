<?php


function convert_to_int($input){
  return intval($input);
}



function convert_to_float($input){
  return floatval($input);
}



function convert_to_string($input){
  return strval($input);
}


function convert_to_bool($input){
  return boolval($input);
}


function convert_to_array($input){
  return array($input);
}


function convert_to_null($input){
  if (!$input){
    return null;
  }
  return $input;
}
