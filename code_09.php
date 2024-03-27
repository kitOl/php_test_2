<?php

require_once './utility.php';

cls("max() functions");

$arrayTest = [-4, 7, 33, 21, 9, 1];

$res = max($arrayTest);
echo "array max: $res\n";

cls("sort() functions");

$res = sort($arrayTest);
var_dump($res, $arrayTest);

cls("array_reverse() function");

$arrayTest = ['a', 'b', 'c', 'd'];
$res = array_reverse($arrayTest);
// var_dump($res);
print_r($res);
