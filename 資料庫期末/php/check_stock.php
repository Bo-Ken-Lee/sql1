<?php
// echo "客戶名字 : 吳天口";
// echo "<br>";
// echo "電話 : 0911111111";

$data = $_POST["data"];
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
$sql = "SELECT goods, stock FROM stock_sql";
// $sql = "SELECT MAX(totle_spent) AS LargestPrice FROM client_sql";
$result = $conn->query($sql);
$varr = 0;
$person = "";

if ($result->num_rows > 0) {
	// 输出数据
	while ($row = $result->fetch_assoc()) {
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

		echo "  剩餘庫存及商品";
		echo "&nbsp;&nbsp;";
		echo $row['stock'];
		echo "&nbsp;&nbsp;";
		// echo "商品 : ";
		echo $row['goods'];

		echo "<br>";
	}
} else {
	echo "0 结果";
}
$conn->close();
