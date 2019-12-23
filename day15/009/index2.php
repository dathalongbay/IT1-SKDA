<?php
/**
 * kết nối đến CSDL theo dạng hàm
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "23thang12";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("kết nối đến CSDL thất bại: " . mysqli_connect_error());
}
echo "kết nối đến CSDL thành công";