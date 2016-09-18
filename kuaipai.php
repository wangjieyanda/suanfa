<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//m冒泡排序
$arr = ['2', '1', '3', '0', '5'];

$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($arr[$j + 1] <= $arr[$j]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";

//快排
$arr = ['2', '1', '3', '0', '5'];

function sortArr($arr) {

    if (count($arr) <= 1) {
        return $arr;
    }
    $left = array();
    $right = array();
    $key = $arr[0];
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] <= $key) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left = sortArr($left);
    $right = sortArr($right);
    return array_merge($left, array($key), $right);
}

$a = sortArr($arr);
echo "<pre>";
print_r($a);
echo "</pre>";
