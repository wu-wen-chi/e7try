
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <title>會員資料</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="shop.html" class="logo">
                            <img src="assets/images/logo.jpg" height="80">
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="shop.html">首頁</a></li>
                            <li class="submenu">
                                <a href="javascript:;">商品</a>
                                <ul>
                                    <li><a href="products.html">男裝</a></li>
                                    <li><a href="products.html">女裝</a></li>
                                    <li><a href="products.html">童裝</a></li>
                                    <li><a href="products.html">配件</a></li>
                                    <li><a href="products.html">全部商品</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">會員中心</a>
                                <ul>
                                    <li><a href="select.php">會員資料</a></li>
                                    <li><a href="contact.html">聯絡我們</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="sign.html">簽到表</a></li>
                            <li class="scroll-to-section"><a href="#top">購物車</a></li>
                            <li class="scroll-to-section"><a href="index.html">登出</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>



    <?php
        session_start();
        $n=$_SESSION['value'];
        
        include('connect.php');
        $sql = "SELECT mName,phone,password,address,email,birthday FROM member where mId='$n'";
        $reslut = mysqli_query($conn, $sql);
        echo "<br><h3 align = 'center'>會員資料</h3><br>
            <table style='border:3px #FFD382 dashed;' cellpadding='10' border='1' align = 'center'>
            <tr>
            <th>姓名</th>
            <th>電話</th>
            <th>密碼</th>
            <th>住址</th>
            <th>信箱</th>
            <th>生日</th>
            </tr>";

        while ($row=mysqli_fetch_array($reslut)) {
            echo "<tr>";
            echo "<td>".$row['mName']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['birthday']."</td>";
            echo "</tr>";
        }
        echo"</table>";
        mysqli_close($conn);
    ?>
    </header>

<script src="assets/js/ui/jquery-2.1.0.min.js"></script>
<script src="assets/js/ui/popper.js"></script>
<script src="assets/js/ui/bootstrap.min.js"></script>
<script src="assets/js/ui/owl-carousel.js"></script>
<script src="assets/js/ui/accordions.js"></script>
<script src="assets/js/ui/datepicker.js"></script>
<script src="assets/js/ui/scrollreveal.min.js"></script>
<script src="assets/js/ui/waypoints.min.js"></script>
<script src="assets/js/ui/jquery.counterup.min.js"></script>
<script src="assets/js/ui/imgfix.min.js"></script>
<script src="assets/js/ui/slick.js"></script>
<script src="assets/js/ui/lightbox.js"></script>
<script src="assets/js/ui/isotope.js"></script>
<script src="assets/js/ui/custom.js"></script>

<script>
    $(function () {
        var selectedClass = "";
        $("p").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function () {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
</body>
</html>