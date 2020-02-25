<?php


class Dienthoaicodien {

    public $ten;
    protected $mausac = "đen";

    protected function goiDien() {
        echo "<br> Gọi điện";
    }

    protected function ngheDien() {
        echo "<br> Nghe điện";
    }

    public function test(){
        // gọi đến protected trong chính nó
        echo "<br>" . $this->mausac;
    }
}

class Smartphone extends Dienthoaicodien {


    public function demo() {
        /**
         * gọi đến thuộc tính va method
         * protected từ bên trong class con kế thừa class cha
         */
        echo $this->mausac;
        $this->goiDien();
    }

    public function guiEmail() {
        echo "<br> guiEmail";
    }

    public function choiGame() {
        echo "<br> choiGame";
    }
}

$ss = new Smartphone();
$ss->demo();

$nokia110i = new Dienthoaicodien();
$nokia110i->test();

