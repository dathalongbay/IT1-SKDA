<?php
require_once 'long/sinhvien.php';
require_once 'tuan/sinhvien.php';

echo __FILE__;

$sinhvien1 = new Long\SinhVien();
$sinhvien1->showInfo();

$sinhvien2 = new Tuan\SinhVien();
$sinhvien2->showInfo();