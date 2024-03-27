<?php

// $filename = './folder/rating.csv';
// $filename = './folder/test.csv';
// csvToViewport($filename);

function csvToViewport($filename)
{

    if (false !== ($file = fopen($filename, 'r'))) {
        while (false !== ($data = fgetcsv($file, 1000, ';'))) {
            // print_r($data);
            $out = '';
            for ($i = 0; $i < count($data); $i++) {
                $out .= $data[$i] . ' ';
            }
            echo $out . "\n";
            echo "--------------------------------\n";
        }
        fclose($file);
    }
}

// csvToArray($filename);

function csvToArray($filename)
{
    $res = [];
    if (false !== ($file = fopen($filename, 'r'))) {
        while (false !== ($data = fgetcsv($file, 1000, ';'))) {
            $res[] = $data;
        }
        fclose($file);
    }
    print_r($res);
}


$arrayTest = [
    [1, 2, 3],
    ['hi', 'hello', 'test'],
    [4, 5, 6],
];

$filename = './folder/test.csv';
$file = fopen($filename, 'w');

foreach ($arrayTest as $line) {
    fputcsv($file, $line, ';');
}
fclose($file);


// JSON files
// read
$jsonFile = './folder/example.json';
$res = file_get_contents($jsonFile);
$data = json_decode($res, true);
print_r($data);

//and write
$jsonData = json_encode($data);
$jsonFileNew = './folder/example_new.json';
$res = file_put_contents($jsonFileNew, $jsonData);
if ($res) {
    echo "JSON file writting are success!\n";
}
