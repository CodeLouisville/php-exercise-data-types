<?php 

function convert_to_int($input) {
	settype($input, "int");
	if(is_int($input)) {
		return $input;
	} else {
		return 0;
	}}
	

function convert_to_float($input) {
	settype($input, "float");
	if(is_float($input)) {
		return $input;
	} else {
		return 0.0;
	}
}

function convert_to_string($input) {
	if(is_string($input)) {
		return $input;
	} else {
		return "";
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
	settype($input, "null");
	if(is_null($input)) {
		return $input;
	} else {
		return null;
	}
}