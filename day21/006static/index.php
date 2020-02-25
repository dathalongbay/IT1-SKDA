<?php


class Oto {

    public $ten;

    // khai báo thuộc tính tĩnh
    //public static $gia = 200;


    public function gioithieu() {
        echo "<br> giới thiệu";
    }

    /**
     * khai báo phương thức tĩnh
     */
    public static function giaban() {
        echo "<br> giá bán của ô tô";
    }

}
Oto::giaban();
// gọi đến thuộc tính tĩnh
//echo "<br>" . Oto::gia;
