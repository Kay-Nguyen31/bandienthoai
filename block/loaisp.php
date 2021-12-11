<div class="container-sp">
    <div class="title">
        <h2>Laptop</h2>
    </div>
    <div class="main">
        <div class="wrapper">
            <?php
            $id_loaisp = $_GET['id_loaisp'];
            $qr = "SELECT * FROM `sanpham` WHERE id_loaisp = '$id_loaisp'";
            $rs = mysqli_query($conn, $qr);
            $i = 0;
            while ($row = mysqli_fetch_assoc($rs)) {
                $i++
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
            ?>

        </div>
    </div>
</div>