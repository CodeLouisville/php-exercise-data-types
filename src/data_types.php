<?php

// ultimately you would know what each of these functions would do in an actual development environment. 

function convert_to_int($value) {
	if(empty($value))
	{
		$value = 0;
	}
	return intval($value);
}
function convert_to_float($value) {
	if(empty($value)) {
		$value = 0.0;
	}
	return floatval($value);	
}
function convert_to_string($value) {
	if(is_array($value))
	{
		$value = implode(', ',$value);
	}
	 return strval($value);
}
function convert_to_bool($value) {
	return boolval($value);
}
function convert_to_array($value) {
	
	$result = array($value)
	if(is_array($result))
	{
		return $result;
	}
	else { 
		return array();
	}
}
function convert_to_null($value) {
	return NULL;
}

?>
