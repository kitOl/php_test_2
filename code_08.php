<?php

require_once './utility.php';

cls("Ассоциативный массив");

$set = array(
    1 => 'Hi',
    2 => '888',
    'name' => 'Oleg',
    'number' => 1970,
    'isEmpty' => true,
);

var_dump($set);
echo $set[2], "\n";
echo $set['name'], "\n";

$test = 'number';
echo $set[$test], "\n";

cls("Добавляем элементы");

$set['say'] = 'Hello!';
print_r($set);

cls("Перебор элементов");

foreach ($set as $key => $value) {
    echo "[$key] => $value\n";
    // echo "\$key: $key, \$value: $value\n";
}

cls("Индексный массив");

function minMax($array)
{

    $min = $max = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    echo "max = $max\n";
    echo "min = $min\n";
}

$arrayFirst = [0, 4, 1, 5, 33, 74];
minMax($arrayFirst);

function sumArray($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    return $sum;
}

$sum = sumArray($arrayFirst);
echo "array sum = $sum\n";


function multiArray($array)
{
    $multi = 1;
    for ($i = 0; $i < count($array); $i++) {
        $multi *= $array[$i];
    }
    return $multi;
}

$multi = multiArray($arrayFirst);
echo "array multiply = $multi\n";


function averArray($array)
{
    $sum = 0;
    $i = 0;
    while ($i < count($array)) {
        $sum += $array[$i];
        $i++;
    }
    return $sum / count($array);
}

$res = averArray($arrayFirst);
echo "array average = $res\n";
