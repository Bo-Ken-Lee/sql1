<?php
// echo "客戶名字 : 吳天口";
// echo "<br>";
// echo "電話 : 0911111111";

$ggg = $_POST["ggg"];
$person_id="0";
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
// $sql = "SELECT givetime, gettime,oder FROM details_sql";
// $sql = "SELECT givetime, gettime, person, product, oder from oder_sql inner Join details_sql on oder.id =details_sql.oder";
$sql = "SELECT givetime, gettime, person, product, oder from details_sql left Join oder_sql on details_sql.oder =oder_sql.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        //判斷是否是想得到的資料
        if ($row['givetime'] > $row['gettime']) {
            // echo $row['oder'];
            fun2($row['person']);
            echo " 買的 ";
            echo $row['product'];
            echo "<br>";
        }
    }
} else {
    echo "沒有任何逾期未領商品";
}

$conn->close();

function fun2($id){
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
    $sql = "SELECT id, person_name,area FROM client_sql";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            //判斷是否是想得到的資料
            if ($id == $row['id']) {
                echo $row['person_name'];
            }
        }
    } else {
        echo "沒有任何逾期未領商品";
    }
    
    $conn->close();
}