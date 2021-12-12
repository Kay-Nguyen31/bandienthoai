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
        <form action="dangky.php" method="post">
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
            <div class="info">
                <label class="form-label" for="gioitinh">Giới tính</label>
                <input class="form-input" id="gioitinh" type="text" name="gioitinh" placeholder="Nhập số điện thoại">
            </div>
            <div class="btn">
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="button" value="Huỷ" id="thoat">
            </div>
            <div class="dangnhap">
                <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
            </div>
        </form>
    </div>
    <?php
    require_once "./connect.php";
    if (isset($_POST['dangky'])) {
        $username = $_POST['tendangnhap'];
        $password = $_POST['matkhau'];
        $password = password_hash($password, PASSWORD_BCRYPT);
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $gioitinh = $_POST['gioitinh'];
        if ($username == "" || $password == "" || $hoten == "" || $email == "" || $gioitinh == "") {
            echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin!");</script>';
        } else {
            $sql = "INSERT INTO `taikhoan`(`username`, `password`, `hoten`, `gioitinh`, `email`, `quyen`) VALUES ('$username', '$password', '$hoten', '$gioitinh', '$email', 'nguoidung') ";
            $rs = mysqli_query($conn, $sql);
            if ($rs) {
                echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
                header('location:login.php');
            } else {
                echo '<script language="javascript">alert("Đăng ký thất bại!");</script>';
            }
        }
    }
    ?>
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