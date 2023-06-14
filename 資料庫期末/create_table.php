<?php
// // 建立客戶資料庫
// $servername = "140.127.74.226";
// $username = "411077003";
// $password = "411077003";
// $dbname = "411077003";
// // 創建連接
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢測連接
// if ($conn->connect_error) {
// die("連接失敗: " . $conn->connect_error);
// }
// // 使用sql 創建數據表
// $sql = "CREATE TABLE client_sql (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// person_name VARCHAR(30) NOT NULL,
// cellphone VARCHAR(30) NOT NULL,
// area VARCHAR(50),
// commodity VARCHAR(25),
// totle_spent VARCHAR(25)
// )";
// if ($conn->query($sql) === TRUE) {
// echo "Table client_sql created successfully";
// } else {
// echo "創建數據表錯誤: " . $conn->error;
// }
// $conn->close();


// // 插入客戶資料庫
// $servername = "140.127.74.226";
// $username = "411077003";
// $password = "411077003";
// $dbname = "411077003";
// // 創建連接
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢測連接
// if ($conn->connect_error) {
// die("連接失敗: " . $conn->connect_error);
// }
// // 使用sql 創建數據表
// $sql = "INSERT INTO client_sql ( person_name , cellphone , area , totle_spent) 
// VALUES ( '王曉明' , '0900000000' , '高雄' ,'200')";

// if ($conn->query($sql) === TRUE) {
// echo "Table into successfully";
// } else {
// echo "創建數據表錯誤: " . $conn->error;
// }
// $conn->close();




// // 建立貨品清單資料庫
// $servername = "140.127.74.226";
// $username = "411077003";
// $password = "411077003";
// $dbname = "411077003";
// // 創建連接
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢測連接
// if ($conn->connect_error) {
// die("連接失敗: " . $conn->connect_error);
// }
// // 使用sql 創建數據表
// $sql = "CREATE TABLE product_sql (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// price VARCHAR(30) NOT NULL,
// sales_revenue VARCHAR(30) NOT NULL,
// product_name VARCHAR(25)
// )";
// if ($conn->query($sql) === TRUE) {
// echo "Table product_sql created successfully";
// } else {
// echo "創建數據表錯誤: " . $conn->error;
// }
// $conn->close();




// 建立訂單資料庫
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";
// 創建連接
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢測連接
if ($conn->connect_error) {
die("連接失敗: " . $conn->connect_error);
}
// 使用sql 創建數據表
$sql = "CREATE TABLE oder_sql1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
person VARCHAR(30) REFERENCES client_sql (id),
oder_time VARCHAR(30) NOT NULL,
product VARCHAR(25) REFERENCES product_sql (id)
)";
if ($conn->query($sql) === TRUE) {
echo "Table oder_sql created successfully";
} else {
echo "創建數據表錯誤: " . $conn->error;
}
$conn->close();


// // 建立訂單資料庫
// $servername = "140.127.74.226";
// $username = "411077003";
// $password = "411077003";
// $dbname = "411077003";
// // 創建連接
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢測連接
// if ($conn->connect_error) {
// die("連接失敗: " . $conn->connect_error);
// }
// // 使用sql 創建數據表
// $sql = "CREATE TABLE oder_sql (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// person INT(6),
// oder_time VARCHAR(30) NOT NULL,
// product VARCHAR(25)
// )";
// if ($conn->query($sql) === TRUE) {
// echo "Table oder_sql created successfully";
// } else {
// echo "創建數據表錯誤: " . $conn->error;
// }
// $conn->close();



// // 建立出貨明細資料庫
// $servername = "140.127.74.226";
// $username = "411077003";
// $password = "411077003";
// $dbname = "411077003";
// // 創建連接
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢測連接
// if ($conn->connect_error) {
// die("連接失敗: " . $conn->connect_error);
// }
// // 使用sql 創建數據表
// $sql = "CREATE TABLE client_sql (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// person_name VARCHAR(30) NOT NULL,
// cellphone VARCHAR(30) NOT NULL,
// area VARCHAR(50),
// commodity VARCHAR(25),
// totle_spent VARCHAR(25)
// )";
// if ($conn->query($sql) === TRUE) {
// echo "Table MyGuests created successfully";
// } else {
// echo "創建數據表錯誤: " . $conn->error;
// }
// $conn->close();
?>