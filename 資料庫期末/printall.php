<?php
// 資料庫連線設定
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 要查詢的資料表
$table = "oder_sql";

// 建立 SQL 查詢
$sql = "SELECT COUNT(*) as total FROM $table";

// 執行查詢
$result = $conn->query($sql);

// 檢查是否有結果
if ($result->num_rows > 0) {
    // 讀取結果
    $row = $result->fetch_assoc();
    
    // 取得行數
    $row_count = $row["total"];
    
    // 顯示行數
    echo "資料表 $table 中的行數： $row_count";
} else {
    echo "沒有結果";
}

// 關閉連線
$conn->close();

echo "<br>";


// 資料庫連線設定
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 要查詢的資料表
$table = "client_sql";

// 建立 SQL 查詢
$sql = "SELECT COUNT(*) as total FROM $table";

// 執行查詢
$result = $conn->query($sql);

// 檢查是否有結果
if ($result->num_rows > 0) {
    // 讀取結果
    $row = $result->fetch_assoc();
    
    // 取得行數
    $row_count = $row["total"];
    
    // 顯示行數
    echo "資料表 $table 中的行數： $row_count";
} else {
    echo "沒有結果";
}

// 關閉連線
$conn->close();


echo "<br>";

// 資料庫連線設定
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 要查詢的資料表
$table = "details_sql";

// 建立 SQL 查詢
$sql = "SELECT COUNT(*) as total FROM $table";

// 執行查詢
$result = $conn->query($sql);

// 檢查是否有結果
if ($result->num_rows > 0) {
    // 讀取結果
    $row = $result->fetch_assoc();
    
    // 取得行數
    $row_count = $row["total"];
    
    // 顯示行數
    echo "資料表 $table 中的行數： $row_count";
} else {
    echo "沒有結果";
}

// 關閉連線
$conn->close();


echo "<br>";
// 資料庫連線設定
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 要查詢的資料表
$table = "product_sql1";

// 建立 SQL 查詢
$sql = "SELECT COUNT(*) as total FROM $table";

// 執行查詢
$result = $conn->query($sql);

// 檢查是否有結果
if ($result->num_rows > 0) {
    // 讀取結果
    $row = $result->fetch_assoc();
    
    // 取得行數
    $row_count = $row["total"];
    
    // 顯示行數
    echo "資料表 $table 中的行數： $row_count";
} else {
    echo "沒有結果";
}

// 關閉連線
$conn->close();
echo "<br>";
// 資料庫連線設定
$servername = "140.127.74.226";
$username = "411077003";
$password = "411077003";
$dbname = "411077003";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 要查詢的資料表
$table = "stock_sql";

// 建立 SQL 查詢
$sql = "SELECT COUNT(*) as total FROM $table";

// 執行查詢
$result = $conn->query($sql);

// 檢查是否有結果
if ($result->num_rows > 0) {
    // 讀取結果
    $row = $result->fetch_assoc();
    
    // 取得行數
    $row_count = $row["total"];
    
    // 顯示行數
    echo "資料表 $table 中的行數： $row_count";
} else {
    echo "沒有結果";
}

// 關閉連線
$conn->close();
?>