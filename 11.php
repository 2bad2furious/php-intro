<?php

$name = $_POST['name'] ?? null;
$age = $_POST['age'] ?? null;

if ($name && $age) {
    echo "Hi, $name ($age)";
} else {
    echo "Send proper data";
}
