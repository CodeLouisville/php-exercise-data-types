<?php
//convert_to_int
function convert_to_int($int){
  return intval($int);
}
echo convert_to_int('4.567');


/*convert_to_float
function convert_to_float($float){
  $convert = floatval($float);
  if($convert != 0) {
    return $convert;
  } else {
    //return 0.0;
    return number_format($convert, 1);
  }
}
echo convert_to_float(4.565);*/

//convert_to_float
function convert_to_float($float){
  $convert = floatval($float);
  if(is_float($convert) == true) {
    return $convert;
  } else {
    return number_format($convert, 1);
  }
}
echo convert_to_float(4.565);


//convert_to_string
function convert_to_string($string){
  if(){

  }
}

//echo convert_to_string("3452")


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
