<?php
//covert_to_int:
function convert_to_int($input = "0")
{
  return $input;
}

echo convert_to_int();


//convert_to_float:

function convert_to_float($input = 0.0)
{
  if($input === 0.0) 
{

return convert_to_float();
} 
}


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

//convert_to_null()

?>
