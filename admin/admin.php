<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/manager.css">
    <link rel="stylesheet" href="./themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Oswald:wght@500;700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/loaisp.css">
    <link rel="stylesheet" href="./css/khachhang.css">
    <link rel="stylesheet" href="./css/donhang.css">
    <link rel="stylesheet" href="./css/themsp1.css">

    <title>Manager</title>
</head>

<div class="container">

    <div class="container-left" id="menu-left" style="background: #fff;">
        <button><img src="./img/icon/close.png" onclick="b()" alt="icon" style="width: 20px;height:25px;margin-top:5px"></button>
        <div class="center">
            <div class="logo">
                <img src="./img/logo/logo.png" alt="" style="width:100%">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php?"> <img src="./img/icon/home.png" alt="" style="width:10%"> Trang Chủ</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=sanpham"><img src="./img/icon/cosmetics.png" alt="" style="width:12%"> Quản lý Sản phẩm</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=loaisp"> <img src="./img/icon/type-2.png" alt="" style="width:12%"> Quản lý loại sản phẩm</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=donhang"> <img src="./img/icon/bill.png" alt="" style="width:12%"> Quản lý Đơn hàng</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=khachhang"> <img src="./img/icon/guest-list.png" alt="" style="width:12%"> Quản lý Khách Hàng</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=thongke"><img src="./img/icon/analytics.png" alt="" style="width:12%"> Thống Kê</a></li>
                    <li><a href="index.php?folder=admin&page=admin&adminpage=test"><img src="./img/icon/analytics.png" alt="" style="width:12%"> Tét</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-right" style="background:#FFF">
        <div class="header-right" style="background:#FFF">
            <div class="button_display">
                <div class="button_left">
                    <img src="./icon/icon/mail.jpg" alt="" style="width:30px;margin-left:30px">
                    <img src="./icon/icon/bell.jpg" alt="" style="width:30px;margin-left:10px">
                </div>
                <div class="button_right">
                    <button onclick="a()"><img src="./img/icon/menu.png" alt="" style="width:30px;height:30px;color:cadetblue"></button>
                </div>
            </div>
            <div class="user">
                <div class="user-left">
                    <ul>
                        <li>
                            <a href="#">Hello Admin
                                <ul class="sub-menu">
                                    <li><a href="#" style="color:#64C5B1;"><button style="background: none;border:none"><i class="ti-reload" style="width:2px;color:black"></i></button> Đổi mật khẩu</a></li>
                                    <li><a href="index.php?controller=home&action=homee" style="color:#64C5B1;"> <img src="./icon/icon/log-out.png" alt="" style="width:10%"> Đăng xuất</a></li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user-right">
                    <img src="./img/icon/user.png" alt="" style="width:50px">
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['adminpage'])) {
        $temp = $_GET['adminpage'];
        require_once path . "/admin/blocks/$temp.php";
    } else {
        require_once path . "/admin/blocks/thongke.php";
    }
    ?>


</div>

</body>

<script>
    function a() {
        document.getElementById('menu-left').style.display = "block";
    }

    function b() {
        document.getElementById('menu-left').style.display = "none";
    }
</script>

</html>