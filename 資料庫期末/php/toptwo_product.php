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
$sql = "SELECT product_name, price, sales_revenue FROM product_sql1";
$result = $conn->query($sql);
$varr=0;
$sales_revenue="";
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        //判斷是否是想得到的資料
        if ($varr < $row['price']*$row['sales_revenue']) {
            $varr=$row['price']*$row['sales_revenue'];
            $sales_revenue=$row["product_name"];
        }    
    }
} else {
    echo "0 结果";
}


$conn->close();

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
$sql = "SELECT product_name, price, sales_revenue FROM product_sql1";
$result = $conn->query($sql);
$varr1=0;
$sales_revenue1="";
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        //判斷是否是想得到的資料
        if ($varr1 < $row['price']*$row['sales_revenue'] && $varr != ($row['price']*$row['sales_revenue'])) {
            $varr1=$row['price']*$row['sales_revenue'];
            $sales_revenue1=$row["product_name"];
        }    
    }
} else {
    echo "0 结果";
}






echo $sales_revenue;
echo " 總銷售額";
echo $varr;

echo "#%";

echo $sales_revenue1;
echo " 總銷售額";
echo $varr1;
$conn->close();

