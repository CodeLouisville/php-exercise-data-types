<?php
//convert_to_int
function convert_to_int($int){
  $value = intval($int);
  if ($value) {
    return $value;
  } else {
    return 0;
  }
}
echo convert_to_int("Hold The DOOR!");


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
  if(is_integer($string) || is_string($string) || is_float($string)){
    return strval($string);
  } elseif (is_array($string)) {
    return implode(", ", $string);
  } else {
    $empty = '';
    return $empty;
  }
}
echo convert_to_string(["skate",45,"trap"]);


//convert_to_bool
function convert_to_bool($bool){
  if(boolval($bool) == 1) {
    return true;
  } else {
    return false;
  }
}
echo convert_to_bool(798);


//convert_to_array
function convert_to_array($arr){
  if(is_array($arr)) {
    $test = array_values($arr);
    print_r($test);
  }
    elseif (is_int($arr) || is_string($arr) || is_float($arr) || is_bool($arr)) {
    $convert_arr = array($arr);
    print_r(array_values($convert_arr));
  } else {
      if (!$arr == null) {
      $empty = [];
      print_r($empty);
    } else
      print_r(null);
      var_dump($empty);
    }
}

echo convert_to_array(45);

//convert_to_null
function convert_to_null($null){
  if (!$null || $null === "null") {
    return null;
  } else {
    return $null;
  }
}
$test = convert_to_null("null");
var_dump($test);