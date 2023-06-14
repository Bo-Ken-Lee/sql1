<?php
$area = $_POST["area"];
$goods = $_POST["goods"];
$stock = $_POST["stock"];
echo "dd";
//把資料上傳資料庫
$servername = '140.127.74.226';
$username = '411077003';
$password = '411077003';
$dbname = '411077003';

$conn = mysqli_connect($servername, $username, $password, $dbname);
//如果連線錯誤，印出為甚麼錯誤
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	echo "連線錯誤";
}
$sql = "INSERT INTO stock_sql (area, stock, goods) VALUES ($area, $stock,'headphones')";
// $sql = "SELECT MAX(totle_spent) AS LargestPrice FROM client_sql";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// 输出数据
	while ($row = $result->fetch_assoc()) {
		echo "輸入成功";
	}
} else {
	echo "輸入訂單失敗";
}
$conn->close();
