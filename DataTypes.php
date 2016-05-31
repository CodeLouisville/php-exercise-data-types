<?php
    $array = [1, 3, 5];
?>

<?php

   function convert_to_int($input) {
        echo intval($input);
}

convert_to_int("one");
   
?>    
 </br>
<?php

   function convert_to_float($input) {
       if ($input == 0) {
           echo "0.0";
       } else 
        echo floatval($input);
}

convert_to_float(6.54);
    
?>    
 </br>

<?php

   function convert_to_string($input) {
       if (is_array($input)) {
           $imp = implode(",", $input);
           return $imp;
       } else return strval($input);
}

var_dump(convert_to_string($array));
    
?>  
</br>
<?php

   function convert_to_bool($input) {
       if (is_bool($input)) {
           echo boolval($input);
       } else echo FALSE;
}

convert_to_bool(TRUE);
    
?>  
</br>
<?php

   function convert_to_array($input) {
       if (is_array($input)) {
           return ($input);
       } else echo "[]";
}

var_dump(convert_to_array($array));
    
?>  

</br>
<?php

   function convert_to_null($input) {
       if ($input != NULL) {
           return ($input);
       } else return (NULL);
}

var_dump(convert_to_null(0));
    
?> 
