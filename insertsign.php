<?php
    session_start();
    $n=$_SESSION['value'];

    include('connect.php');
    include('sign.php');

    $sql = "INSERT INTO signform (mId,stime) VALUES ($n,NOW())";
    $reslut = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
?>