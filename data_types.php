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
	if(is_array($dataIn)){
		$dataOut='';
		foreach ($dataIn as $value){
			$dataOut = $dataOut.$value.', ';			
		}
		if(count($dataIn) == 1){
			$dataOut = $dataIn[0];
			settype($dataOut,"string");}
	}else{	
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
	if (!$dataIn){
		settype($dataIn, "null");
	}
	return $dataIn;	
}


/*
//input data
$input = [1,23,45];
echo "The input data is: ";
var_dump($input);



//output data
echo "</br> After the input is converted, the output data is: ";
//$output = convert_to_int($input);//convert to integer
//$output = convert_to_float($input);//convert to float
//$output = convert_to_string($input);//convert to string
//$output = convert_to_bool($input);//convert to boolean
//$output = convert_to_array($input);//convert to boolean
$output = convert_to_null($input);//convert to null
var_dump($output);


//echo "</br>$output</br>";
//var_dump ($input);
*/
?>