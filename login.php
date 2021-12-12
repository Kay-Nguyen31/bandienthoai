<?php
require "./connect.php";
require "./admin/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/dangnhap.css">
</head>

<body>
    <div class="container">
        <div class="main" style="border-right: 1px solid #000">
            <form action="login.php" method="post">
                <div class="title">
                    <h3>ĐĂNG NHẬP</h3>
                </div>
                <div class="info">
                    <!-- <label class="form-label" for="tendangnhap">Tên đăng nhập</label> -->
                    <input class="form-input" id="tendangnhap" type="text" name="tendangnhap" placeholder="Tên đăng nhập">
                </div>
                <div class="info">
                    <!-- <label class="form-label" for="matkhau">Mật khẩu</label> -->
                    <input class="form-input" id="matkhau" type="text" name="matkhau" placeholder="Mật khẩu">
                </div>
                <div class="quenmatkhau">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div class="btn">
                    <input type="submit" value="Đăng Nhập" id="login" name="login">
                    <input type="submit" value="Huỷ" id="thoat">
                </div>
                <!-- <div class="signup">
                    <p>Chưa có tài khoản? <a href="">Đăng ký</a></p>
                </div> -->
            </form>
        </div>
        <div class="main">
            <form>
                <div class="title">
                    <h3>KHÁCH HÀNG MỚI</h3>
                </div>
                <div class="description">
                    <p>Đăng ký ngay!</p>
                    <p>Tạo tài khoản của bạn và tận hưởng những lợi ích trực tuyến độc quyền từ chúng tôi!</p>
                </div>
                <div class="btn-1">
                    <input type="button" value="Đăng ký" id="register">
                </div>
            </form>
        </div>
    </div>
    <script>
        // document.getElementById('login').onclick = function() {
        //     window.location.href = "index.php?folder=admin&page=admin";
        // }
        document.getElementById('register').onclick = function() {
            window.location.href = "dangky.php";
        }
        document.getElementById('thoat').onclick = function() {
            document.location.href = "index.php?controller=home&action=homee";
        }
    </script>
</body>
</html>
<?php
    require_once "connect.php";
    if(isset($_POST['login'])){
        $username = $_POST['tendangnhap'];
        $password = $_POST['matkhau'];
        if($username == ""){
            echo '<script language="javascript">alert("Vui lòng nhập thông tin!");</script>';
        }
        else{
            $sql="SELECT * FROM `taikhoan` WHERE username = '$username'";
            $rs = mysqli_query($conn, $sql);
            $data = [];
            while($row = mysqli_fetch_array($rs)){
                $data[] = $row;
                // print_r($data);
                if(count($data)>0)
                {
                    if(password_verify($password,$data[0]["password"]))
                    {
                        $_SESSION['userid'] = $data[0]['id'];
                        $quyen = $data[0]["quyen"];
                        if($quyen == 'nguoidung'){
                            echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
                            header('location:index.php');
                        }
                        else{
                            echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
                            header('location:index.php?folder=admin&page=admin');
                        }
                        
                    }
                    else{
                        echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu!");</script>';
                    }
                    
                }

            }
        }
    }
?>