<?php
$idsp = $_GET['idsp'];
?>
<div class="container-chitiet">
    <div class="title">
        <?php
        $qr = "SELECT * FROM sanpham, loaisp WHERE sanpham.id = '$idsp' AND sanpham.id_loaisp = loaisp.id";
        $rs = mysqli_query($conn, $qr);
        while ($row = mysqli_fetch_array($rs)) {
        ?>
            <h1> <?php echo $row['ten_loaisp']; ?> - <?php echo $row['tensp']; ?></h1>
        <?php
        }
        ?>
    </div>
    <div class="wrapper-chitiet">
        <div class="item-hinhanh">

            <?php
            $qr = "SELECT * FROM `sanpham` WHERE id = '$idsp'";
            $rs = mysqli_query($conn, $qr);
            while ($row = mysqli_fetch_array($rs)) {
            ?>

                <img src="./img/<?php echo $row['hinhanh']; ?>" alt="" >
            <?php
            }
            ?>
        </div>
        <div class="item-chitiet">
            <div class="inf-item">
                <h2>Mua online giảm giá sốc</h2>
                <?php

                $qr = "SELECT * FROM `sanpham` WHERE id = '$idsp'";
                $rs = mysqli_query($conn, $qr);
                while ($row = mysqli_fetch_array($rs)) {
                ?>
                    <h4><?php echo $row['gia'] ?>đ</h4>
                <?php
                }
                ?>
                <p class="title-km">Khuyến mãi Cực sốc trị Giá 100k Áp dụng đến ngày 30/11</p>
                <div class="content-sp">
                    <br>
                    <p>- Chứa gấp 10 lần hàm lượng Vitamin B3 (Niacinamide)* và hoạt chất chống nắng</p>
                    <p>- Thấm nhanh tức thì, không gây nhờn rít</p>
                    <p>- Tinh chất bạc hà cho da dịu mát suốt ngày dài</p>
                    <br>
                </div>
                <br>
                <a href="" class="muangay">Mua ngay</a>
                <a href="" class="themvaogiohang">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="item-km">
            <h4>-- CHẤT LƯỢNG CHO TẤT CẢ --</h4>
            <div class="km">
                <img src="./img/home/chinh-sach-04.png" alt="">
                <strong>SẢN PHẨM CHÍNH HÃNG</strong>
                <p>Chất lượng sản phẩm luôn được chứng nhận bằng sự tin cậy của Khách Hàng suốt nhiều năm qua</p>
            </div>
            <div class="km">
                <img src="./img/home/chinh-sach-05.png" alt="">
                <strong>LUÔN ĐƯỢC TÍCH ĐIỂM</strong>
                <p>Đơn hàng từ 100k=1 điểm 10 điểm nhận voucher 100k</p>
            </div>
            <div class="km">
                <img src="./img/home/chinh-sach-06.png" alt="">
                <strong>MIỄN PHÍ GIAO HÀNG</strong>
            </div>
            <div class="km">
                <img src="./img/home/chinh-sach-07.png" alt="">
                <strong>TRI ÂN KHÁCH HÀNG</strong>
                <p>Với các chương trình khuyến mãi, các sự kiện & quà tặng đặc biệt vô cùng hấp dẫn</p>
            </div>
        </div>
    </div>
</div>

<div class="container-thongtin-chitiet">
    <div class="wrapper-chitiet1">
        <div class="item-chitiet1">
            <div class="title">
                <h2> Cấu hình của sản phẩm </h2>
            </div>
            <div class="cauhinh">
                <ul>
                    <?php
                    $qr = "SELECT * FROM sanpham,chitietsp WHERE sanpham.id = '$idsp' AND sanpham.id = chitietsp.id_sp";
                    $rs = mysqli_query($conn, $qr);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <li><a href="#">Tên: <?php echo $row['tensp']; ?></a></li>
                        <li><a href="#">Màn hình: <?php echo $row['manhinh']; ?></a></li>
                        <li><a href="#">Hệ điều hành: <?php echo $row['hedieuhanh']; ?></a></li>
                        <li><a href="#">Chip: <?php echo $row['chip']; ?></a></li>
                        <li><a href="#">Ram: <?php echo $row['ram']; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                $qr = "SELECT * FROM `sanpham` WHERE id = '$idsp'";
                $rs = mysqli_query($conn, $qr);
                while ($row = mysqli_fetch_array($rs)) {
                ?>

                    <img src="./img/<?php echo $row['hinhanh']; ?>" alt="" >
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>