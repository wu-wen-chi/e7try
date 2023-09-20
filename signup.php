<?php
    header("Content-Type: text/html; charset=utf8");
    if (!isset($_POST['submit'])) {
        exit("錯誤執行");
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];

    include('connect.php');
    $sql = "insert into member(mId,mName,phone,password,address,email,birthday) values (null,'$name','$phone','$password','$address','$email','$birthday')";
    $reslut = mysqli_query($conn, $sql);
    if (!$reslut) {
        die('Error: ');
    } else {
        echo "
        <script>
        alert('註冊成功');
        setTimeout(function(){window.location.href='index.html';},100);
        </script>";
    }
    mysqli_close($conn);
?>