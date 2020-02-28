<?php
/**
 * khai báo các hằng số cho ứng dụng
 * khai báo BASE_PATH : đường dẫn gốc của ứng dụng
 * khai báo BASE_URL : là url gốc của ứng dụng
 * __FILE__ trả về đường dẫn trên ổ đĩa của file hiện tại đang chạy
 * dirname(__FILE__) trả về đường dẫn folder mẹ của file hiện tại
 */
define("BASE_PATH", dirname(__FILE__));
// www.abc.com
define("BASE_URL", "http://localhost/IT1-SKDA/day22a23/appmvc/");


/**
 * Nạp tất cả các file cần thiết cho ứng dụng trước khi chạy
 * file index.php chính là file đầu vào của ứng dụng
 */

// nạp các router
include_once BASE_PATH."/mvc/route.php";

// nạp file kết nối đến CSDL
include_once BASE_PATH."/mvc/models/database.php";

// nạp các controller của ứng dụng
include_once BASE_PATH."/mvc/controllers/indexcontroller.php";
include_once BASE_PATH."/mvc/controllers/bookcontroller.php";

// nạp các model của ứng dụng
include_once BASE_PATH."/mvc/models/bookmodel.php";
include_once BASE_PATH."/mvc/models/usermodel.php";

/**
 * Cần phải hiểu là trong ứng dụng MVC đến Framework
 * mọi request http sẽ đi qua index.php
 * => đi đến file điều hướng route.php
 * => file điều hướng sẽ gọi controller tương ứng với request
 * => controller gọi đến method có action tương ứng
 *
 * Route : chịu trách nhiệm dẫn hướng cho request vào Controller
 * Controller chịu trách nhiệm điều hướng . gọi model . trả vê view . redirect URL
 * Model : chịu trách nhiệm xử lý tính toán , tương tác trực tiếp với CSDL
 * View : chỉ chịu trách nhiệm hiển thị dữ liệu và giao diện
 * Mọi request đều chạy qua index.php
 * chứ ko trực tiếp chạy vào file controller
 *
 * View có khái niệm layout và view
 * Layout là bố cục hiển thị gồm header , footer , sidebar
 * View là khai niệm để nói về nội dung chính trong trang
 * Các trang đa số chỉ thay đổi nội dung chính giữa trang mà không thay đổi header hay footer
 */

// khởi tạo router
$router = new Route();
$router->run();