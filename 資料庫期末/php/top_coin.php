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
$sql = "SELECT person_name, totle_spent FROM client_sql";
// $sql = "SELECT MAX(totle_spent) AS LargestPrice FROM client_sql";
$result = $conn->query($sql);
$varr=0;
$person="";
// if ($result->num_rows > 0) {
//     // 输出数据
//     while ($row = $result->fetch_assoc()) {
//         echo $row['tolte_spent'];
//         echo $row['tolte_spent']
//         // //判斷是否是想得到的資料
//         //如果正確==true        
//         if ($varr < $row['tolte_spent']) {
//             $varr=$row["tolte_spent"];
//             $person=$row["person"];
//         }
//     }
// }

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        // echo $row['totle_spent'];
        // echo $row['totle_spent'];
        //判斷是否是想得到的資料
        if ($varr < $row['totle_spent']) {
            $varr=$row["totle_spent"];
            $person=$row["person_name"];
        }    
    }
} else {
    echo "0 结果";
}
echo $person;
echo " 總消費額";
echo $varr;

$conn->close();
