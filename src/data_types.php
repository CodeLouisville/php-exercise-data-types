<?php 

function convert_to_int($input){
	return intval($input);
}


function convert_to_float($input){
	return floatval($input);
}



function convert_to_string($input){
	if(gettype($input) === "array") {
		$res = '';
		foreach ($input as $item ){
			if ($res === ""){
				$res = $item;
			} else {
				$res .= ', ' . $item;
			}
		} 
		return $res;
	}
	return strval($input);
}



function convert_to_bool($input){
	return boolval($input);
}



function convert_to_array($input){
	return (array)($input);
}


function convert_to_null($input){
	if (floatval($input) === 0.0){
		return null;		
	} 
	return $input;
}

?>