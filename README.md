# Data Types in PHP

For this PHP code exercise, create a file named `data_types.php`. This file should contain the following functions:
 
- `convert_to_int()`
- `convert_to_float()`
- `convert_to_string()`
- `convert_to_bool()`
- `convert_to_array()`
- `convert_to_null()`

Each of these functions should accept one parameter as *input*. The function should *convert* the *input* into the respective data type and `return` the converted value. For example, `convert_to_int()` should return the *input* converted to the `int` data type, and `convert_to_string()` should return the *input* converted to the `string` data type, and so on.
 
If a value can not be converted you should return the following *falsy* value for each data type:

- Return `0` for `convert_to_int()`
- Return `0.0` for `convert_to_float()`
- Return an empty string for `convert_to_string()`
- Return `false` for `convert_to_bool()`
- Return `[]` for `convert_to_array()`
- Return `null` for `convert_to_null()`

There are a few special cases:

1. If an `array` is passed as *input* to `convert_to_string()`, it should be a string representation of the elements, in order, as a comma separated list. For example, an input of `[1, 2, 3]` should return `1, 2, 3`, an input of `[1]` should return `1`.
2. If any of the *falsy* values above or the string `null` is passed as *input* to `convert_to_null()`, it should return `null`. Otherwise, it should return the original *input*.

## Just getting started?
Review the [PHP Code Exercises](https://github.com/CodeLouisville/back-end-php/tree/master/exercises) documentation for more details on performing code exercises.

## Need help?
Jump on the PHP channel in Slack and ask your fellow students and mentors for a hint.
