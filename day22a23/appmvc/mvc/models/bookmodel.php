<?php

/**
 * Class BookModel
 * Trong model chịu trách nhiệm tương tác với CSDL
 * và xử lý phần liên quan đến logic
 */
class BookModel extends Database {

    // khai báo bảng của model
    public $table = "products";


    // lấy tất cả các bản ghi trong CSDL
    public function getAll() {

        $sql = "SELECT * FROM " . $this->table;
    }

    // lấy 1 bản ghi duy nhất trong CSDL
    public function getSingle($id) {

        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;
    }

    // thêm vào trong bảng
    public function insert($data) {
        $product_name = $data["product_name"];
        $product_desc = $data["product_desc"];
        $product_price = $data["product_price"];
        $sql = "INSERT INTO " . $this->table . "(product_name, product_desc,product_price) VALUES ('$product_name', '$product_desc', $product_price)";
    }

    // cập nhật vào bảng
    public function update($data) {
        $id = $data["id"];
        $product_name = $data["product_name"];
        $product_desc = $data["product_desc"];
        $product_price = $data["product_price"];
        $sql = "UPDATE " . $this->table . " SET product_name='$product_name',product_desc='$product_desc', product_price =$product_price WHERE id=".$id;

    }

    // xóa bản ghi trong CSDL
    public function delete($id) {

        $sql = "DELETE FROM " . $this->table . " WHERE id=".$id;
    }


    /**
     * lấy ra tất cả cuốn sách bán chạy nhất trong 1 tháng
     * logic
     */
    public function getAllBookTrends() {

    }


}