<?php

$url =  $_SERVER['REQUEST_URI'];


switch ($url){
    case 'login': $filename = 'login.php';
    // TODO 404 - default:
}

// TODO always initialize $filename
require $filename;
