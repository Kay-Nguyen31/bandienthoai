<!-- khung màu trắng bên trong manager -->
<div class="container-khungchua">
    <div class="khungchua">
        <div class="wrapper-khungchua">
            <div class="item-khungchua-left"></div>
            <div class="item-khungchua-center">
                <!-- code trong div này .. tạo class rồi code -->
                <div class="dh-container">
                    <div class="dh-main">
                        <div class="dh-title">
                            <h2>Danh sách đơn hàng</h2>
                        </div>
                        <div class="header-group">
                            <div class="dh-timkiem">
                                <input type="text" placeholder="Tìm kiếm..">
                                <input id="btn-timkiem" type="button" value="Tìm kiếm">
                            </div>
                            <!-- <div class="btn-them">
                                <input type="submit" value="Thêm đơn hàng" id="themdonhang">
                            </div> -->
                        </div>
                        <div class="dh-content">
                            <table>
                                <thead>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="./img/4.jpg" alt=""></td>
                                        <td>Son Black Rough Air Fit Velvet Tint</td>
                                        <td>2</td>
                                        <td>180,000</td>
                                        <td>360,000</td>
                                        <td>Chưa thanh toán</td>
                                        <td><button class="btn-capnhat"><a href="">Cập nhật</a></button></td>
                                        <td><button class="btn-xoa"><a href="">Xoá</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="./img/4.jpg" alt=""></td>
                                        <td>Son Black Rough Air Fit Velvet Tint</td>
                                        <td>2</td>
                                        <td>180,000</td>
                                        <td>360,000</td>
                                        <td>Đã thanh toán</td>
                                        <td><button class="kh-btn"><a href="">Sửa</a></button></td>
                                        <td><button class="kh-btn"><a href="">Xoá</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <script>
                    document.getElementById("themdonhang").onclick = function() {
                        window.location.href = "index.php?folder=admin&page=admin&adminpage=themdonhang";
                    }
                </script>

                <!-- code trong div này .. tạo class rồi code -->

            </div>
            <div class="item-khungchua-right"></div>

        </div>
    </div>

</div>