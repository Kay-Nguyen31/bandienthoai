<div class="container-khungchua">
    <div class="khungchua">
        <div class="wrapper-khungchua">
            <div class="item-khungchua-left"></div>
            <div class="item-khungchua-center">
                <!-- code trong div này .. tạo class rồi code -->
                <div class="kh-container">
                    <div class="kh-main">
                        <div class="kh-title">
                            <h2>Danh sách khách hàng</h2>
                        </div>
                        <div class="kh-timkiem">
                            <input type="text" placeholder="Tìm kiếm..">
                            <input id="kh-tk-btn" type="button" value="Tìm kiếm">
                        </div>
                        <div class="kh-content">
                            <table>
                                <thead>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Giới tính</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once "./admin/function.php";
                                    require_once "./connect.php";
                                    $kh = loadKhachHang($conn);
                                    $i=0;
                                    for($i=1; $i<$row = mysqli_fetch_array($kh); $i++){
                                    ?>
                                    <tr>
                                        <td><?php  echo $i?></td>
                                        <td><?php echo $row['hoten']?></td>
                                        <td><?php echo $row['gioitinh']?></td>
                                        <td><?php echo $row['email']?></td></td>
                                        <td><button class="kh-btn"><a href="">Sửa</a></button></td>
                                        <td><button class="kh-btn"><a href="">Xoá</a></button></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- code trong div này .. tạo class rồi code -->

            </div>
            <div class="item-khungchua-right"></div>

        </div>
    </div>

</div>
<!--  -->