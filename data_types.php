
<?php
//convert_to_int()
function convert_to_int($input){
if (is_string($input)) { $input = 0;
}
  return intval($input);
}
//convert_to_float()
function convert_to_float($input){
if (is_string($input)) { $input = 0.0;
}
  return floatval($input);
}
//convert_to_string()
function convert_to_string($input){
if (is_array($input)) { return implode(",", $input);
}
  return (string)$input;
}
//convert_to_bool()
function convert_to_bool($input){
  if (!$input) {
    return false;
  }
  return settype($input,'bool');
}
//convert_to_array()
function convert_to_array($input){
  if ($input == null) { return [];
}
  return str_split($input);
}
//convert_to_null()
function convert_to_null($input){
  if (!$input || $input == "null"){
    return null;
  } else {
    return $input;
  }
}

 ?>
