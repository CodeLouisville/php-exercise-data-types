<?php
  
  function convert_to_int($input) {
 	return intval($input);
  }
  
  function convert_to_float($input) {
 	return floatval($input);
  }
  
  function convert_to_string($input) {
 	return strval($input); 	
  if (is_array($input))
     return implode(', ',$input);
    	return is_string((string)$input)?(string)$input:'';
  }
  
  function convert_to_bool($input) {
 	return (bool)$input;
 	return is_bool((bool)$input)?(bool)$input:false;
  }
  
  function convert_to_array($input) {
 	implode([$input]);
 	$input = array([$input]);
 	return $input;
 	return is_array((array)$input)?(array)$input:[];
  }
  
  function convert_to_null($input) {
 	$input = null;
 	return $input;
 	if ($input==='null') $input=null;
     return convert_to_bool($input)?$input:null;
  }