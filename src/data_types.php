<?php

function convert_to_int($input){
 return is_int((int)$input)?(int)$input:0;  
}
function convert_to_float($input){
    return is_float((float)$input)?(float)$input:0.0;
}
                    
function convert_to_string($input){
    if (is_array($input))
        return implode(', ',$input);
       
    return is_string((string)$input)?(string)$input:'';
}
function convert_to_bool($input){
    return is_bool((bool)$input)?(bool)$input:false;
}
    
function convert_to_array($input){
    return is_array((array)$input)?(array)$input:[];
}  
function convert_to_null($input){
    //ensure the string 'null' is converted to null
    if ($input=='null') $input=null;
    return convert_to_bool($input)?$input:null;
}
?>
