<?php 

function convert_to_int($input) {
	return (int)$input;
}

function convert_to_float($input) {
	settype($input, "float");
	if(is_float($input)) {
		return $input;
	} else {
		return 0.0;
	}
}

function convert_to_string($input) {
	if(is_array($input)) {
		return implode(", ", $input);
	} else {
	return (string)$input;
	}
}
	
function convert_to_bool($input) {
	settype($input, "bool");
	if(is_bool($input)) {
		return $input;
	} else {
		return false;
	}
}

function convert_to_array($input) {
	settype($input, "array");
	if(is_array($input)) {
		return $input;
	} else {
		return [];
	}
}

function convert_to_null($input) {
	if(!$input || $input === "null") {
		return null;
	} else {
		return $input;
	}
}
