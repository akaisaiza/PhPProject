<?php 
include("../Context/Config.php");
include("../Context/DB.php");
include("../Model/User.php");


// Khởi tạo Config
$config = new Config();

// Khởi tạo DbContext với cấu hình từ Config
$dbContext = new DB($config->db);
$username = null;
$passInput = null;
if (isset($_POST["txtUsername"])) {
    $username = (string)$_POST["txtUsername"];
}

if (isset($_POST["txtPassword"])) {
    $passInput = (string)$_POST["txtPassword"];
}
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
    $nameErr =" You need Enter Account";
}else if($users != null)
    foreach($users as $user){
         $pass = $user -> Password; 
         if($pass == $hashed_password){
            // header('Location: /Index.php');
            echo "<script language='javascript'> location.href = '/index.php'</script>";
            // exit();
         }else{
            $nameErr = " Login Error !";
         }
    }
?>