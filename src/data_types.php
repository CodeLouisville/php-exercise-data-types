<?php
function convert_to_int($input){
  if (intval($input)==true){
      return intval($input);
  } else {
      return 0;}

}

function convert_to_float($input){
  if (floatval($input)==true){
    return floatval($input);
  }else {return 0.0;
    }
}

function convert_to_string($input){
  if (is_array($input)){
    return implode (', ' , $input);
  }
    else {
      if (strval($input)==true){
        return strval($input);
      }else {
          return "";
      }
    }
}

function convert_to_bool($input){
  if (boolval($input) == true){
    return boolval($input);
  }else {
      return false;
  }
}

function convert_to_array($input){
  if (array($input)==true) {
    return array($input);
  }else {
      return [];
  }
}

function convert_to_null($input){
  if ($input == 0) { return null;}
    elseif ($input == 0.0) {return null;}
    elseif ($input == "" ) {return null;}
    elseif ($input == false) {return null;}
    elseif ($input == []) { return null;}
    elseif ($input == "null") {return null;}
  else {
    return $input;
  }
}
/*
var_dump(convert_to_int(7.6));
var_dump(convert_to_float(4));
var_dump(convert_to_string([64,809]));
var_dump(convert_to_bool(12));
var_dump(convert_to_array([155,9,23]));
var_dump(convert_to_null(8787));
*/
 ?>
