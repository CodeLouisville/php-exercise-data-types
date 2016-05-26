<?php

function convert_to_int($input){
	return (int)$input;
	
}
//echo convert_to_int("1");

function convert_to_float($input){
	return (float)$input;
}

//var_dump(convert_to_float("ohddj"));

function convert_to_string($input){
	if(is_array($input)){
		return implode(", ",$input);
	} else{
		return (string)$input;
	}
}
//$a=array(2,3);
 //var_dump(convert_to_string($a));

function convert_to_bool($input){
	return (bool)$input;
}

//var_dump(convert_to_boolean(7));

function convert_to_array($input){
	return (array)$input;
}

//var_dump(convert_to_array(null));

function convert_to_null($input){
	if(empty($input) || $input === "null"){
		return (unset)$input;
	} else {
		return $input;
	}
}
//$a = array(2, 3);
//$a = true;
//var_dump(convert_to_null("null"));