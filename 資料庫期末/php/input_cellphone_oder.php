<?php
// echo "客戶名字 : 吳天口";
// echo "<br>";
// echo "電話 : 0911111111";

// $ggg = $_POST["ggg"];
$person_name = $_POST["person_name"];
$oder_id = $_POST["oder_id"];
$product = $_POST["product"];
echo $person_name;
echo $oder_id;
echo $product;
// echo $ggg;
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
$sql = "INSERT INTO oder_sql (person, product, oder_id, oder_time) VALUES (1,'CCTV' ,4, 20220617)";
// $sql = "SELECT MAX(totle_spent) AS LargestPrice FROM client_sql";
$result = $conn->query($sql);

$conn->close();
