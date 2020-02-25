<?php
abstract class Samsung {

    abstract function giaban();

}

class SmartphoneSamsung {


    public function giaban() {
        echo "<br>giá bán từ 2 đến 50 triệu";
    }
}

class SamsungTab {

    public function giaban() {
        echo "<br>giá bán từ 2 đến 20 triệu";
    }
}