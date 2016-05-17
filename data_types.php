<?php

function convert_to_int($input) {
	intval($input);
	return $input;
}

function convert_to_float($input) {
	floatval($input);
	return $input;
}

function convert_to_string($input) {
	strval($input);
	return $input;
}

function convert_to_bool($input) {
	boolval($input);
	return $input;
}

function convert_to_array($input) {
	array([$input]);
	return $input;	
}

function convert_to_null($input) {
	$input = null;
	return $input;
}