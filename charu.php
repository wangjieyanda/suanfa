<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//插入排序，看着咋像选择排序？？？

$arr = ['3', '5', '1', '6', '7', '3'];

$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    $key = $arr[$i];
    for ($j = 0; $j < $count; $j++) {
        if ($i != $j && $key >= $arr[$j]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";

