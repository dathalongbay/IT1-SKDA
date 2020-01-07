<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 1/7/2020
 * Time: 8:45 PM
 */

$consume = 158;


$conlai = $consume;

$a = $b = $c = $d = 0;

// khách hàng tiêu thụ > 10 khối
if ($conlai > 10) {
    $a = 10*5000 ; // 50000
    $conlai = $conlai-10; // 158 - 10 = 148
} else {
    $a = $conlai*5000; // 8*5000 = 40000
    $conlai = 0;
}


// mức 2 từ 11 đến 20
if ($conlai > 10) {
    $b = 10*8000; // 80000
    $conlai = $conlai-10; // 148 - 10 = 138
} else {
    $b = $conlai*8000;
    $conlai = 0;
}

// mức 3 từ 21 đến 50
if ($conlai > 30) {
    $c = 30*18000;
    $conlai = $conlai-30; // 138 - 30 = 108
} else {
    $c = $conlai*18000;
    $conlai = 0;
}

// trên 50 mét khối
if ($conlai > 0) {
    $d = $conlai*23000;
    $conlai = 0;
}

$total1 = $a + $b + $c + $d;





