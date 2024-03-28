<?php

$timeNow = time();
echo $timeNow . "\n";
echo date('Y-m-d H:i:s') . "\n";
echo "current month number: " . date('n') . "\n";

$russianMonths = [
    1 => 'января',
    2 => 'февраля',
    3 => 'марта',
    4 => 'апреля',
    5 => 'мая',
    6 => 'июня',
    7 => 'июля',
    8 => 'августа',
    9 => 'сентября',
    10 => 'октября',
    11 => 'ноября',
    12 => 'декабря',
];

echo "Сегодня " . date('d ', $timeNow), $russianMonths[date('n')],
date(' Y H:i:s'), "\n";

// timestamp -> unix time
$str = "8 October 1970 20:00";
echo $now = strtotime($str), "\n";
echo date('Y/m/d H:i:s', $now), "\n";
