
<?php

    function convert_to_int($input) {
			return intval($input);
		};
		
    function convert_to_float($input) {
			return floatval($input);
		};
		
    function convert_to_string($input) {
			if (empty($input)) {
				return '';
			}
			if (is_array($input)) {
				implode(",", $input);
			} else {
				return strval($input);
			}
		};
		
    function convert_to_bool($input) {
			return boolval($input);
		};
		
    function convert_to_array($input) {
			return str_split($input);
		};
		
    function convert_to_null($input)  {
			return intval($input);
		};

?>		
