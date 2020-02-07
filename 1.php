<?php

// Dynamicly typed

// Types

$a = false; // boolean
$a = 1; // int
$a = 1.1; // float
$a = []; // array
$a = null; // null
$a = function ($arg) { // callable | object (Closure)
    return $arg;
};
$a = fopen("file.txt", "w+"); // resource
$a = new InvalidArgumentException(); // object
$a = 'b'; // string
$a = "Hi!"; // string

if (
    is_bool($a)
    || is_int($a)
    || is_float($a)
    || is_string($a)
    || is_array($a)
    || is_scalar($a) // bool | int | float | string
    || is_object($a)
) echo $a; // 'prints' to the browser

$a = "Hi " . "again";
//casting
$b = (int)$a;
$b = intval($a);
?><!-- this is optional
