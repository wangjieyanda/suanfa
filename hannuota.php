<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//汉诺塔


function move($a = 1, $from, $to) {
    printf('move from %s to %s' . '<br>', $from, $to);
}

function hannuo($n, $from, $helper, $to) {
    if ($n == '1') {
        move(1, $from, $to);
    }
    if ($n >= 2) {
        hannuo($n - 1, $from, $to, $helper);
        move(1, $from, $to);
        hannuo($n - 1, $helper, $from, $to);
    }
}

hannuo(3, 'A', 'B', 'C');
