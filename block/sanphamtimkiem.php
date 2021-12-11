<div class="container-sp">
    <div class="title">
        <h2>Các Sản phẩm bạn Tìm</h2>
    </div>
    <div class="main">
        <div class="wrapper">
            <?php
            $search = $_GET['search'];
            $qr = "SELECT * FROM `sanpham` WHERE sanpham.tensp LIKE '%$search%';";
            $rs = mysqli_query($conn, $qr);
            $num = mysqli_num_rows($rs);
            if($num > 0 && $search != "")
            {
                while ($row = mysqli_fetch_assoc($rs)) {
            ?>
                <div class="item">
                    <img src="./img/<?php echo $row["hinhanh"] ?>" alt="photo">
                    <h3><a href="index.php?page=chitietsp&idsp=<?php echo $row["id"] ?>"><?php echo $row["tensp"] ?></a></h3>
                   
                    <p><?php echo $row["chi tiet"] ?></p>
                    <div class="button">
                        <button class="price"><?php echo $row["gia"] ?></button>
                        <button class="buy">Mua ngay</button>
                    </div>
                </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>