<?PHP
    session_start();
    header("Content-Type: text/html; charset=utf8");
    if (!isset($_POST["submit"])) {
        exit("錯誤執行");
    }

    include('connect.php');

    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if ($phone && $password) {
        $sql = "select * from member where phone='$phone' and password='$password'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows) {
            header("refresh:0;url=shop.html");
            $knowMember=mysqli_fetch_assoc($result);
            $_SESSION['value']=$knowMember['mId'];
            exit;
        } else {
            echo "
            <script>
            alert('帳號或密碼錯誤!!');
            setTimeout(function(){window.location.href='index.html';},100);
            </script>";
        }
    } else {
        echo "
        <script>
        alert('帳號密碼填寫不完整!!');
        setTimeout(function(){window.location.href='index.html';},100);
        </script>";
    }
    mysqli_close($conn);
?>