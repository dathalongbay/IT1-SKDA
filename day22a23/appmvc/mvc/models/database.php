<?php

class Database {

    // tạo ra 1 thuộc tính chứa kết nối đến cơ sở dữ liệu
    public $connection;

    const DB_SERVER = "localhost";

    const DB_USER = "root";

    const DB_PASSWORD = "";

    // khai báo tên CSDL
    const DB_NAME = "mvc";

    /**
     * Phương thức khởi tạo constructor cho class
     */
    public function __construct()
    {
        $servername = self::DB_SERVER;
        $dbname = self::DB_NAME;
        $username = self::DB_USER;
        $password = self::DB_PASSWORD;
        $this->connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    /*
     * hàm hủy kết nối đến CSDL của class
     *
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.


        // Đóng kết nối đến CSDL theo hướng PDO
        $this->connection = null;
    }


}