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
		return implode(",",$input);
	} else{
		return (string)$input;
	}
}
//$array_var =array(1,2,3);
//var_dump(convert_to_string(66));

function convert_to_boolean($input){
	return (boolean)$input;
}

//var_dump(convert_to_boolean(7));

function convert_to_array($input){
	return (array)$input;
}

//var_dump(convert_to_array(null));

function convert_to_null($input){
	if(!empty($input)){
		return $input;
	} else {
		return (unset)$input;
	}
}
//$a = array();
//var_dump(convert_to_null(true));