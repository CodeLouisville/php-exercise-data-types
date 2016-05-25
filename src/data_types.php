<?php

// convert_to_int()

	function convert_to_int($int){
		
		return intval($int);
	}

	$num = convert_to_int('666');
	//echo convert_to_int('dog');
	var_dump($num);


// convert_to_float()
	
	function convert_to_float($float){
		
		if(floatval($float) != 0){
			return floatval($float); 
		} else {
			return 0.0;
		}
	}

	$float = convert_to_float('foo');
	//$float = convert_to_float('3.14159PIETOWNANDZBOYS');
	
	var_dump($float);
	//echo $float;


//convert_to_string()

	function convert_to_string($str){
		if(is_array($str)){
			return implode(", " , $str);
		} else if(settype($str, 'string')) {
			return $str;
		} else {
			return "";
		}
	}

	//$var = convert_to_string(55);
	$var = convert_to_string(array('foo', 'bar'));

	//echo $var;
	var_dump($var);


//convert_to_bool

	function convert_to_bool($boo) {
		return (bool) $boo;
	}
	
	$bool = convert_to_bool(null);
	var_dump($bool);


//convert_to_array()

	function convert_to_array($arrgh) {
		if (is_array($arrgh)) {
			return($arrgh);
		} elseif (is_string($arrgh) || is_bool($arrgh) || is_float($arrgh)) {
			return array_map('strval', array($arrgh));
		} elseif (is_int($arrgh)) {
			return array_map('intval', str_split($arrgh));
		} else {
			return [];
			}
	}
	
	$yayarray = convert_to_array(array(2, 3));
	var_dump($yayarray);


//convert_to_null()

	function convert_to_null() {}



