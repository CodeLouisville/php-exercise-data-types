
<?php
//convert_to_int()
function convert_to_int($input){
  return intval($input);
}
//convert_to_float()
function convert_to_float($input){
  return floatval($input);
}
//convert_to_string()
function convert_to_string($input){
if (is_array($input)) { $input = implode(",", $input);
  } else {
    $input = strval($input);
  }
  return $input;
}
//convert_to_bool()
function convert_to_bool($input){
  if ($input) {
    return true;
  } else {
    return false;
  }
}
//convert_to_array()
function convert_to_array($input){
  if ($input === null) {
    return array();
  } else if (is_array($input)) {
    return $input;
  } else {
    return array($input);
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
