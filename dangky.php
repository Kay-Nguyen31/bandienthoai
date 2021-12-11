<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" type="text/css" href="./css/dangky.css">
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>ĐĂNG KÝ</h2>
        </div>
        <form action="">
            <div class="info">
                <label class="form-label" for="tendangnhap">Tên đăng nhập</label>
                <input class="form-input" id="tendangnhap" type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập">
            </div>
            <div class="info">
                <label class="form-label" for="matkhau">Mật khẩu</label>
                <input class="form-input" id="matkhau" type="text" name="matkhau" placeholder="Nhập mật khẩu">
            </div>
            <div class="info">
                <label class="form-label" for="hoten">Họ và tên</label>
                <input class="form-input" id="hoten" type="text" name="hoten" placeholder="Nhập họ và tên">
            </div>
            <div class="info">
                <label class="form-label" for="email">Email</label>
                <input class="form-input" id="email" type="text" name="email" placeholder="Nhập email">
            </div>
        </form>
        <form action="" class="main">
            <div class="info">
                <label class="form-label" for="sodienthoai">Số điện thoại</label>
                <input class="form-input" id="sodienthoai" type="text" name="sodienthoai" placeholder="Nhập số điện thoại">
            </div>
            <div class="info">
                <label class="form-label" for="diachi">Địa chỉ</label>
                <input class="form-input" id="diachi" type="text" name="diachi" placeholder="Nhập địa chỉ">
            </div>
            <div class="btn">
                <input type="button" value="Đăng Ký">
                <input type="button" value="Huỷ" id="thoat">
            </div>
            <div class="dangnhap">
                <p>Đã có tài khoản? <a href="index.php?controller=dangnhap&action=login">Đăng nhập</a></p>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('thoat').onclick = function() {
            if (confirm('Bạn có chắc muốn thoát')) {
                document.location.href = "index.php?controller=home&action=homee";
            } else {
                document.location.href = "index.php?controller=dangky&action=register";
            }
        }
    </script>
</body>

</html>