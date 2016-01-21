<?php
//covert_to_int:
function convert_to_int($input = "0")
{
  return $input;
}

echo convert_to_int();


//convert_to_float:

function convert_to_float($input=0)
{
return ($input + 0.0);
}

convert_to_float();


//convert_to_string:
function convert_to_string($input = 0)
{
 return "$input";
}

echo convert_to_string();


//convert_to_bool()
function convert_to_bool($input = false) {
  if (is_bool($input) === true) {
    echo "This is a boolean!";
  }
}

return convert_to_bool();


//convert_to_array()

function convert_to_array($input=array("cheese","bread","chocolate")) {
  echo "I miss " . $input[0] . ", " . $input[1] . " and " . $input[2] . "!";
}

return convert_to_array();

//convert_to_null()

function convert_to_null($input = array()){ 
  if($input == NULL){
  echo "This is null.";
} else {
  echo "Oops. This is not null.";
}
}

return convert_to_null();





?>
