<?php

class BookController {

    /**
     * để trả về view liệt kê các cuốn sách
     */
    public function indexAction() {
        echo "<br>" . __METHOD__;

        $bookModel = new BookModel();

        // index.php => route.php => controller ( gọi model )
        // model trả dữ liệu cho controller => controller trả dữ liệu
        // xuống view => view hiển thị

        $books = $bookModel->getAll();

        $a = "demo biến của controller";

        include_once BASE_PATH."/mvc/views/books/index.php";
    }

    /**
     * để trả về view tạo ra 1 form nhập cuốn sách
     */
    public function createAction() {
        echo "<br>" . __METHOD__;

        include_once BASE_PATH."/mvc/views/books/create.php";
    }

    /**
     * để trả về view sửa cuốn sách
     */
    public function editAction() {
        echo "<br>" . __METHOD__;

        include_once BASE_PATH."/mvc/views/books/edit.php";
    }

    /**
     * để trả về view xóa cuốn sách trước khi xóa thật sự
     */
    public function deleteAction() {
        echo "<br>" . __METHOD__;

        include_once BASE_PATH."/mvc/views/books/delete.php";
    }

}