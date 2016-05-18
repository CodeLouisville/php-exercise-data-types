<?php
//convert_to_int
function convert_to_int($int){
  return intval($int);
}
echo convert_to_int('4.567');


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
  if($convert == true) {
    return $convert;
  } else {
    return 0.0;
  }
}
echo convert_to_float("25.656  ");


//convert_to_string
function convert_to_string($string){
  if(is_integer($string) || is_string($string)){
    return strval($string);
  } elseif (is_array($string)) {
    return implode(",", $string);
  } else {
    return '';
  }
}
echo convert_to_string('poop');


//convert_to_bool
//function convert_to_bool(){

//}

//convert_to_array
//function convert_to_array(){

//}

//convert_to_null
//function convert_to_null(){

//}






 ?>
