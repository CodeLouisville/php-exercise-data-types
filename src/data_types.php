<?php
function convert_to_int($a){
	return intval($a);
}

function convert_to_float($b){
	return floatval($b);
}

function convert_to_string($c){
	if(is_array($c)){
		return implode(", ",$c);
	} else {
		return strval($c);
	}
}

function convert_to_bool($d){
	return boolval($d);
}

function convert_to_array($e){
	return (array)$e;
}

function convert_to_null($f){
	if(!$f || $f === "null"){
		return null;
	} else {
		return $f;
	}
}
?>