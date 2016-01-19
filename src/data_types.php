<?php
    function convert_to_int($input) {
      return intval($input);
    }
    
    function convert_to_float($input) {
      return floatval($input);
    }
    
    function convert_to_string($input) {
      if (is_array($input)) {
        return implode(", ", $input);
      } else {
        return strval($input);
      }
    }
    
    function convert_to_bool($input) {
      return boolval($input);
    }
    
    function convert_to_array($input) {
      if (is_null($input)) {
        return [];
      }
      if ($input === []) {
        return [];
      }
      if (is_array($input)) {
        return $input;
      }
      return [$input];
    }
    
    function convert_to_null($input) {
        if ( ($input==0) or ($input==0.0) or ($input=='') or ($input==[]) or ($input==false) or ($input=='null')) {
            return null;
        } else {
            return $input;
        }
    }
    
?>
