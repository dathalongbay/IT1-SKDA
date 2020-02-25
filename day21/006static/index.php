<?php


class Oto {

    public $ten;

    // khai báo thuộc tính tĩnh
    public static $gia = 200;


    public function gioithieu() {
        echo "<br> giới thiệu";
        $this->ten;
    }

    /**
     * khai báo phương thức tĩnh
     */
    public static function giaban() {
        echo "<br> giá bán của ô tô";

        /**
         * chú ý trong phương thức static không được phép
         * sử dụng $this để chỉ chính class
         * mà phải dùng self thay thế
         *
         */
        echo "<br>" . self::$gia;

    }

}
Oto::giaban();
// gọi đến thuộc tính tĩnh vẫn phải giữ $
echo "<br>" . Oto::$gia;
