<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//啤酒2元钱1瓶；4个瓶盖可换1瓶，2个空瓶可换1瓶。 问：10元钱可以喝几瓶？

$emptyBottle = 0;
$bottleCap = 0;
$bar = 0;

$money = 10;
while ($money >= 2 || $emptyBottle >= 2 || $bottleCap >= 4) {
    echo '喝前money=' . $money . '-瓶盖=' . $bottleCap . '-空瓶=' . $emptyBottle . "<br>";
    if ($money >= 2) {
        $money = $money - 2;
    } elseif ($emptyBottle >= 2) {
        $emptyBottle = $emptyBottle - 2;
    } elseif ($bottleCap >= 4) {
        $bottleCap = $bottleCap - 4;
    }
    $bar ++;
    $emptyBottle++;
    $bottleCap++;
    echo 'bar=' . $bar . "<br>";
}