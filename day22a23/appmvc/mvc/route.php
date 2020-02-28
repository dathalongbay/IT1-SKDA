<?php


class Route {

    /**
     * map các đường dẫn trên url vào các controller tương ứng
     */
    public function run() {

        $controller = isset($_GET["controller"]) ? $_GET["controller"] : "index";
        $action = isset($_GET["action"]) ? $_GET["action"] : "index";

        // domain/index.php?controller=book&action=index

        // domain/index.php?controller=book&action=create

        // domain/index.php?controller=book&action=edit&id=?

        // domain/index.php?controller=book&action=delete&id=?
        $controller = ucfirst($controller);
        $controllerClassName = $controller."Controller";
        $actionName = $action."Action";

        echo '<br>$controllerClassName : ' . $controllerClassName;
        echo '<br>$actionName : ' . $actionName;
        $controllerObject = new $controllerClassName();
        $controllerObject->$actionName();


        /**
         * $name = new SinhVien();
         * $name->chay();
         *
         * $conmeoA = new ConMeo();
         * $conmeoA->an();
         *
         */


    }
}