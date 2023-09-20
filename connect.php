<?php
    $host='localhost';
    $dbuser='root';
    $dbpassword='';
    $dbname='e7try';

    $conn=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
    if ($conn) {
        mysqli_query($conn,'SET NAMES utf8');
        // echo "正確連接資料庫";
    }else{
        echo "不正確連接資料庫</br>".mysqli_connect_error();
    }
?>