<?php

 declare(strict_types=1);

function withoutTypes($arg) {
    return false;
}

function withTypes(int $a): int {
    return $a + 2;
}

// function as a variable
$a = function (string $str): string {
    return $str;
};

// arrow function as a variable
$b = fn(int $a): int => $a + 2;

$c = function (?object $arg): bool {
    return $arg === null;
};

$arr = [1];
$mapped = array_map($b, $arr);
echo $mapped[0] . "<br>";
$mapped2 = array_map('withTypes', $arr);
echo $mapped2[0];

// type juggling, stops working with strict_types

$d = function (int $i): string {
    return $i + 2;
};



