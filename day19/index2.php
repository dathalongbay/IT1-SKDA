<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 1/7/2020
 * Time: 7:23 PM
 */

$waters = [
    ["level" => 1, "label" => "1 - 10", "total" => 10],
    ["level" => 2, "label" => "11 - 20", "total" => 10],
    ["level" => 3, "label" => "21 - 50", "total" => 30],
    ["level" => 4, "label" => "trên 50", "total" => null],
];
$totalComsume = 158;
foreach ($waters as $watersKey => $watersVal) {
    $waters[$watersKey]["real"] = $totalComsume-$waters[$watersKey]["total"];

}
