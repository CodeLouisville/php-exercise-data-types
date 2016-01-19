<?php
    function convert_to_int($input) {
      return intval($input);
    }
    
    function convert_to_float($input) {
      return floatval($input);
    }
    
    function convert_to_string($input) {
      if (is_array($input)) {
        return implode(",", $input);
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
      if ($input == []) {
        return [];
      }
      return ['$input'];
    }
    
    function convert_to_null($input) {
      if (is_null($input)) {
        return null;
      }
      if ($input == 'null') {
        return null;
      }
      if ($input == false) {
        return null;
      }
      return $input;
    }
    
?>
