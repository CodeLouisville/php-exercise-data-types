<?php
//Return `0` for `convert_to_int()`
//Return `0.0` for `convert_to_float()`
//Return an empty string for `convert_to_string()`
//Return `false` for `convert_to_bool()`
//Return `[]` for `convert_to_array()`
//Return `null` for `convert_to_null()`

$input = array("somethign", "two", "Three");

function convert_to_int($input){
 return (int)$input;
}


function convert_to_float($input){
  return (double)$input;
}

function convert_to_string($input){
 //array to string code here should return comma seperated values in a string
  if (is_array ($input)){
    $length = count($input);
    $output = "";

    for($i = 0; $i < $length; $i++){
    $output .= $input[$i] . ", ";
    }
    return $output;
  }
  else{ return (string)$input;}
  // return (string)$input;
}

function convert_to_bool($input){
  return false;
}

function convert_to_array($input){
 return array($input);
}

function convert_to_null($input){
  if( $input == 0 || $input == false){
    return null;
  }else{return true;}
}

?>
