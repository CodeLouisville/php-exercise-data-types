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
echo convert_to_bool(45);


//convert_to_array
function convert_to_array($arr){
  if(is_array($arr)) {
    $test = array_values($arr);
    print_r($test);
  }
    elseif (is_int($arr) || is_string($arr) || is_float($arr) || $arr != null || $arr != false) {
    $convert_arr = array($arr);
    print_r(array_values($convert_arr));
    } else {
    $empty = [];
    print_r($empty);
    }
}

echo convert_to_array(false);


//convert_to_null
function convert_to_null($null){
  $value= is_null($null);
  // var_dump($value);
  if ($value) {
    return null;
  } /*elseif ($null == 0 || $null == "0" || $null == "null" || is_bool($null) || $null == "" || $null == []) {
    return "yay";
  }*/ else {
    return $null;
    //var_dump($null);
  }
 }

/*$poo =*/ convert_to_null("true");
// var_dump($poo);
