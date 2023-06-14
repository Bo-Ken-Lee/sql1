<?php
// echo "客戶名字 : 吳天口";
// echo "<br>";
// echo "電話 : 0911111111";

$ggg = $_POST["ggg"];
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
$sql = "SELECT  oder_id, oder_time, product, person_name, area from oder_sql left Join client_sql on client_sql.id =oder_sql.person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        //判斷是否是想得到的資料
        if ($ggg == $row['oder_id']) {
            echo $row['area'];
            echo "地區的 ";
            echo $row['person_name'];
            echo "先生/小姐 購買的";
            echo $row['product'];
            echo "<br>";
            echo "預計到貨時間為 ";
            echo $row['oder_time'];
            echo "<br>";
            echo "<br>";
        }
    }
} else {
    echo "沒有該商品編號";
}
$conn->close();
