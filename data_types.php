
<?php
//convert_to_int()
function convert_to_int($input){
  if (settype($input, "int")) {
    return $input;
  } else {
    return 0;
  }
}

//convert_to_float()
function convert_to_float($input){
  if (settype($input, "float")) {
    return $input;
  } else {
    return 0.0;
  }
}

//convert_to_string()
function convert_to_string($input){
  if (is_array($input)) {
     return implode(", ", $input);;
  } elseif (!settype($input, "string")){
    return "";
  } else {
    return $input;
  }
}
//convert_to_bool()
function convert_to_bool($input){
  if (settype($input, "bool")){
    return $input;
  } else {
    return false;
  }
}

//convert_to_array()
function convert_to_array($input){
  if (settype($input, "array")) {
    return $input;
  } else {
    return array();
  }
}
//convert_to_null()
function convert_to_null($input){
  if (!$input || $input === "null"){
    return null;
  } else {
    return $input;
  }
}

?>
