<?php
session_start();
// $n=$_SESSION['value'];

include('connect.php');

$sql = "select * from signform where mid='$n'";

// 設置一個空陣列來放資料
$datas = array();
$changeEvent = array();
$result = mysqli_query($conn, $sql);
// $rows=mysqli_fetch_array($result);

// 如果有資料
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            // 每跑一次迴圈就抓一筆值，最後放進data陣列中
            $datas[] = $row;

            // 前端事件處理
            $startDate=substr($row["stime"],0,10);
            $perChangeEvent=array("title"=>"已簽到","start"=>$startDate);
            $changeEvent[] = $perChangeEvent;
        }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}
// 處理完後印出資料
// if(!empty($result)){
//     // 如果結果不為空，就利用print_r方法印出資料
//     // print_r($datas);
// }
// else {
//     // 為空表示沒資料
//     echo "查無資料";
// }
// $changeEvent = array();

// echo json_encode($datas);
echo json_encode($changeEvent);
//https://ithelp.ithome.com.tw/articles/10254637

?>