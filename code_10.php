<?php

$filename = './folder/text.txt';
$res = file_exists($filename);
var_dump($res);

$res = filesize($filename);
$res2 = @filesize('foo.txt');
var_dump($res, $res2);


$filename = './folder/new.txt';
writeTime($filename);

function writeTime($file)
{
    $fp = fopen($file, 'w');
    $ws = fwrite($fp, date('Y-m-d H:i:s', time()));
    var_dump($fp, $ws);
    $cs = fclose($fp);
    var_dump($cs);
}

readFromFile($filename);

function readFromFile($file)
{
    $fp = fopen($file, 'r');
    $content = fread($fp, filesize($file));
    var_dump($fp, $content);
    $cs = fclose($fp);
    var_dump($cs);
}


openThisDir('.');

function openThisDir($dir)
{
    echo "Current dir contents:\n";
    if ($handle = opendir($dir)) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != '.' && $entry != '..') {
                echo "$entry : " . filesize($dir . "/" . $entry) . "\n";
            }
        }
    }
    closedir($handle);
}
