<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/manager.css">
    <link rel="stylesheet" href="./css/danhsachsanpham.css">
    <link rel="stylesheet" href="./css/donhang.css">
    <link rel="stylesheet" href="./css/khachhang.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/themsp1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Oswald:wght@500;700&family=Pacifico&display=swap" rel="stylesheet">
    <title>Manager</title>
</head>

<body>
    <div class="container123">
        <div class="header123">
            <div class="logo123">
                <img src="./img/logo/logo.png" alt="" style="width:100%">
            </div>
        </div>
        <div class="container-left123" id="menu-left">
            <div class="menu123">
                <ul class="menu123-list">
                    <li><a class="menu123-link" href="index.php?"> <img src="./img/icon/home.png" alt="" style="width:10%"> Trang Chủ</a></li>
                    <li><a class="menu123-link" href="index.php?folder=admin&page=admin&adminpage=sanpham"><img src="./img/icon/cosmetics.png" alt="" style="width:12%"> Quản lý Sản phẩm</a></li>
                    <li><a class="menu123-link" href="index.php?folder=admin&page=admin&adminpage=loaisp"> <img src="./img/icon/type-2.png" alt="" style="width:12%"> Quản lý loại sản phẩm</a></li>
                    <li><a class="menu123-link" href="index.php?folder=admin&page=admin&adminpage=donhang"> <img src="./img/icon/bill.png" alt="" style="width:12%"> Quản lý Đơn hàng</a></li>
                    <li><a class="menu123-link" href="index.php?folder=admin&page=admin&adminpage=khachhang"> <img src="./img/icon/guest-list.png" alt="" style="width:12%"> Quản lý Khách Hàng</a></li>
                    <li><a class="menu123-link" href="index.php?folder=admin&page=admin&adminpage=thongke"><img src="./img/icon/analytics.png" alt="" style="width:12%"> Thống Kê</a></li>
                </ul>
            </div>
            <label for="menu123-reponsive-input" class="icon">Menu</label>
            <input type="checkbox" hidden class="menu123-input" id="menu123-reponsive-input">
            <label for="menu123-reponsive-input" class="menu123-over-play"></label>
            <div class="menu123-reponsive">
                <ul class="menu123-list-reponsive">
                    <li><a class="menu123-link-reponsive" href="index.php?"> <img src="./img/icon/home.png" alt="" style="width:10%"> Trang Chủ</a></li>
                    <li><a class="menu123-link-reponsive" href="index.php?folder=admin&page=admin&adminpage=sanpham"><img src="./img/icon/cosmetics.png" alt="" style="width:12%"> Quản lý Sản phẩm</a></li>
                    <li><a class="menu123-link-reponsive" href="index.php?folder=admin&page=admin&adminpage=themloaisp"> <img src="./img/icon/type-2.png" alt="" style="width:12%"> Quản lý loại sản phẩm</a></li>
                    <li><a class="menu123-link-reponsive" href="index.php?folder=admin&page=admin&adminpage=donhang"> <img src="./img/icon/bill.png" alt="" style="width:12%"> Quản lý Đơn hàng</a></li>
                    <li><a class="menu123-link-reponsive" href="index.php?folder=admin&page=admin&adminpage=khachhang"> <img src="./img/icon/guest-list.png" alt="" style="width:12%"> Quản lý Khách Hàng</a></li>
                    <li><a class="menu123-link-reponsive" href="index.php?folder=admin&page=admin&adminpage=thongke"><img src="./img/icon/analytics.png" alt="" style="width:12%"> Thống Kê</a></li>
                </ul>
            </div>
        </div>
        <div class="container-right123" style="background:#FFF">
            <div class="header-right123">
                <div class="button_display123">
                    <div class="button_left123">
                        <img src="./img/icon/mail.jpg" alt="" style="width:30px;margin-left:30px">
                        <img src="./img/icon/bell.jpg" alt="" style="width:30px;margin-left:10px">
                    </div>
                </div>
                <div class="user123">
                    <div class="user-left123">
                        <p class="hello">Hello Eunbi</p>
                        <ul class="sub-menu123">
                            <a href="#">Đổi mật khẩu</a>
                            <a href="#"><img src="./img/icon/log-out.png" alt="" style="width:10%"> Đăng xuất</a>
                        </ul>
                    </div>
                    <div class="user-right123">
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