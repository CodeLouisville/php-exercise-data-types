<?php

$a = "99";
$b = 99;
$c = 1.99;
$d = "1909";
$e = 1;

//Convert string to Int
(int)$a;
var_dump($a + 0); //int(99)

//convert int to_float()
(float)$b;
var_dump($b + .7); // float(99.7)

//convert int_to_string()  using Inline variable parsing
echo "I'd like {$b} waffles\n"; // I'd like 99 waffles

//or explicit
echo (string)$b; // 99

//convert int_to_bool()
var_dump((bool)$e); // bool(true)
echo ((bool)$c) ? 'true' : 'false'; // true


//convert int_to_array()
$array  = array_map('intval', str_split($d));
var_dump($array);

//convert_to_null()
$newA =  is_null($a);
var_dump($newA);
?>

<?php

//Convert to Int
function convert_to_int($input = "0"){		
   return $input;
}
 
 echo convert_to_int();
?>

<?php 
//Convert to float
 $num = "7.5"; 
 $rating = floatval($num);

function convert_to_float($rating){
    return $rating;
}

echo convert_to_float($rating);
?>

<?php
//Convert to String

$input = 555;

function convert_to_string($input){
    return "$input";
}
echo convert_to_string($input);
?>

<?php
//Convert to bool
$var = 0;
$input = boolval($var);

function convert_to_bool($input){
    if(is_bool($input) === true){
        echo "Booyah! A Boolean!";
    } else {
        echo "404 error";
    }
}
echo convert_to_bool($input);

?>

    


