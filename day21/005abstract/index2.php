<?php

// khai báo class abstract
abstract class Samsung {

    // khai báo abstract method
    // abstract method không có code thực thi bên trong
    abstract public function giaban();

}


class SamsungMobile extends Samsung {

    public function test() {
        echo "<br>test";
    }


    public function giaban() {
        echo "<br> giá bán từ 2 tr đến 50 tr";
    }

}

$ssGalaxy = new SamsungMobile();
$ssGalaxy->giaban();