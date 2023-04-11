<?php 
include("../Context/Config.php");
include("../Context/DB.php");
include("../Model/User.php");


// Khởi tạo Config
$config = new Config();

// Khởi tạo DbContext với cấu hình từ Config
$dbContext = new DB($config->db);
$username = $_POST["txtUsername"];
$passInput = $_POST["txtPassword"];
// Chuẩn bị truy vấn"
$query = $dbContext->prepare("SELECT * FROM User where Username = '$username'");
$nameErr = null;
// Thực hiện truy vấn
$query->execute();
$hashed_password = md5($passInput);

// Lấy danh sách kết quả
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$users = array();
foreach ($results as $row) {
    $user  = new User((int)$row['UserID'],(string) $row['Username'],(string) $row['Password']);
    array_push($users, $user);
}
if($users == null){
    $nameErr =" Ban chua dien gi";
}else if($users != null)
    foreach($users as $user){
         $pass = $user -> Password; 
         if($pass == $hashed_password){
            header('Location: Index.php');
            exit();
         }else{
            $nameErr = " Login deo  thanh cong";
         }
    }
?>