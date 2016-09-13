<?php
//Return `0` for `convert_to_int()`
//Return `0.0` for `convert_to_float()`
//Return an empty string for `convert_to_string()`
//Return `false` for `convert_to_bool()`
//Return `[]` for `convert_to_array()`
//Return `null` for `convert_to_null()`

$input = "Ello World ";

function convert_to_int($input){
 return (int)$input;
}

function convert_to_float($input){
  return (double)$input;
}

function convert_to_string($input){
//  array to string code here should return comma seperated values in a string
  if (bool is_array(mixed $input)){
    for(var i = 0; i<$input.Length; i++){
    return $input[i];
    }
  }
  else{return (string)$input;}
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

echo convert_to_string($input);

?>
