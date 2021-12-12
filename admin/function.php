<?php
function login($conn)
{
    
    // if (isset($_POST['database'])) {
    //     $database = $_POST['database'];
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "banhang";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $qr = "SELECT * FROM `taikhoan` WHERE username = '$user' AND password ='$pass'";
        $rs = mysqli_query($conn, $qr);
        if ($rs) {
            header('location:index.php?folder=admin&page=admin');
        } 
    //     else {
         
         
        // }
}

    function taotaikhoan($conn, $qr)
    {
        $rs = mysqli_query($conn, $qr);
        if ($rs == true) {
            echo "thành công";
            // header('location:index.php?folder=admin&page=captk');
        } else {
            echo "thất bại";
            // header('location:index.php?folder=admin&page=login');
        }
    }

    function loadKhachHang($conn){
        $sql = "SELECT * FROM `taikhoan` WHERE quyen = 'nguoidung'";
        return mysqli_query($conn, $sql);
    }

