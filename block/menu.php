<div class="container">
    <div class="container-menu">
        <div class="menu">
            <ul class="menu-list">
                <li><a class="menu-link" href="index.php?page=sanpham">Trang chủ</a></li>
                <?php
                $qr = "SELECT * FROM `loaisp`";
                $rs = mysqli_query($conn, $qr);
                while ($row = mysqli_fetch_assoc($rs)) {
                ?>
                    <li><a class="menu-link" href="index.php?page=loaisp&id_loaisp=<?php echo $row['id'] ?>"><?php echo $row['ten_loaisp'] ?></a></li>
                <?php
                }
                ?>
                <li><a class="menu-link" href="login.php">Đăng nhập</a></li>
            </ul>
        </div>
        <label for="menu-reponsive-input" class="icon">Menu</label>
        <input type="checkbox" hidden class="menu-input" id="menu-reponsive-input">
        <label for="menu-reponsive-input" class="over-play"></label>
        <div class="menu-reponsive">
            <label for="menu-reponsive-input" class="close">close</label>
            <ul class="menu-list-reponsive">
                <li><a class="menu-link-reponsive" href="index.php?page=sanpham">Trang chủ</a></li>
                <?php
                $qr = "SELECT * FROM `loaisp`";
                $rs = mysqli_query($conn, $qr);
                while ($row = mysqli_fetch_assoc($rs)) {
                ?>
                    <li><a class="menu-link-reponsive" href="index.php?page=loaisp&id_loaisp=<?php echo $row['id'] ?>"><?php echo $row['ten_loaisp'] ?></a></li>
                <?php
                }
                ?>
                <li><a class="menu-link-reponsive" href="login.php">Đăng nhập</a></li>
            </ul>
        </div>
    </div>
</div>