<?php
function convert_to_int($dataIn){
	settype($dataIn, "integer");
	return $dataIn;
}

function convert_to_float($dataIn){
	settype($dataIn, "float");
	return $dataIn;	
}

function convert_to_string($dataIn) {	
	if(is_array($dataIn)){//if $dataIn is an array
		$data = array_map("convert_to_string", $dataIn);//recursion, the function calling itself 
		$dataOut = implode(', ', $data); //convert array to string	
	}else{	//if $dataIn is not an array
		$dataOut = $dataIn;
		settype($dataOut, "string");
	}
	return $dataOut;		
}

function convert_to_bool($dataIn){
	settype($dataIn, "boolean");
	return $dataIn;	
}

function convert_to_array($dataIn){
	settype($dataIn, "array");
	return $dataIn;		
}


function convert_to_null($dataIn){
	if(!$dataIn || $dataIn === 'null'){
		return null;
	} else {
		return $dataIn;
	}
}

/*
//input data
$input = ['null', null];
echo "The input data is: ";
var_dump($input);



//output data
echo "</br> After the input is converted, the output data is: ";
//$output = convert_to_int($input);//convert to integer
//$output = convert_to_float($input);//convert to float
//$output = convert_to_string($input);//convert to string
//$output = convert_to_bool($input);//convert to boolean
//$output = convert_to_array($input);//convert to array
$output = convert_to_null($input);//convert to null
var_dump($output);


//echo "</br>$output</br>";
//var_dump ($input);
*/
?>