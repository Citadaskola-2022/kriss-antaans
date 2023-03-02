<?php

$text = file_get_contents('./text.txt');
$text = strtolower($text);
$array = explode(' ', $text);

$res = [];
foreach ($array as $a){
    if(strlen($a)<4){
        continue;
    }
    $res[$a] ??= 0;
    $res[$a]++;
}

asort($res);

$top1 = array_pop($res);
$top2 = array_pop($res);

var_dump($top1, $top2);

var_dump($res);

