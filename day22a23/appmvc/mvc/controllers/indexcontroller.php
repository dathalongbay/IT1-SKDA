<?php
class IndexController {


    public function indexAction() {

        echo "<br>" . __METHOD__;

        include_once BASE_PATH."/mvc/views/index/index.php";
    }
}