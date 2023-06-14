<?php
// echo "客戶名字 : 吳天口";
// echo "<br>";
// echo "電話 : 0911111111";

$ggg = $_POST["ggg"];
$va = true;
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
$sql = "SELECT stock, goods, area FROM stock_sql";
// $sql = "SELECT MAX(totle_spent) AS LargestPrice FROM client_sql";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        //判斷是否是想得到的資料
        if (2 > $row['stock'] && $ggg==$row['area']) {
            echo $row['goods'];
            echo "<br>";
            $va=false;
        }
    }
} else {
    echo "高雄沒有任何商品缺貨";
}
if($va){
    echo "高雄沒有任何商品缺貨";
}

$conn->close();
