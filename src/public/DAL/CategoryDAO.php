<?php 
include("Context/Config.php");
include("Context/DB.php");
include("Model/Category.php");


// Khởi tạo Config
$config = new Config();

// Khởi tạo DbContext với cấu hình từ Config
$dbContext = new DB($config->db);

// Chuẩn bị truy vấn
$query = $dbContext->prepare('SELECT * FROM category');

// Thực hiện truy vấn
$query->execute();

// Lấy danh sách kết quả
$results = $query->fetchAll(PDO::FETCH_ASSOC);


// Duyệt qua danh sách kết quả và tạo từng đối tượng Category
 $categories = array();
foreach ($results as $row) {
    $category = new Category((int)$row['id'],(string) $row['name'],(string) $row['image']);
    array_push($categories, $category);
}

?>