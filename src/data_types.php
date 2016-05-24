<?php
//convert_to_int
function convert_to_int($int){
  return intval($int);
}
echo convert_to_int('dog');


//convert_to_float
/*function convert_to_float($float){
  $convert = floatval($float);
  if($convert != null) {
    return $convert;
  } else {
    //return 0.0;
    return number_format($convert, 1);
  }
}
echo convert_to_float("dog");*/


//convert_to_float
function convert_to_float($float){
  $convert = floatval($float);
  if($convert) {
    return $convert;
  } else {
    return 0.0;
  }
}
echo convert_to_float("pop");


//convert_to_string
function convert_to_string($string){
  if(is_integer($string) || is_string($string)){
    return strval($string);
  } elseif (is_array($string)) {
    return implode(", ", $string);
  } else {
    $empty = '';
    return $empty;
  }
}
echo convert_to_string(['cat', 3, 'dog', 33, 'pop']);


//convert_to_bool
function convert_to_bool($bool){
  if(boolval($bool) == 1) {
    return true;
  } else {
    return false;
  }
}
echo convert_to_bool(45);


//convert_to_array
function convert_to_array($arr){
  if(is_array($arr)) {
    print_r($arr);
  }
    elseif (is_int($arr) OR is_string($arr)) {
    $convert_arr = array($arr);
    print_r($convert_arr);
  } else {
    $empty = [];
    return $empty;
    }
}

echo convert_to_array(40);


//convert_to_null
function convert_to_null($null){
  if (is_null($null) || $null != true) {
    return null;
  } else {
    return $null;
  }
}

echo convert_to_null(false);
