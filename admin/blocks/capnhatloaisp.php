<div class="container-khungchua">
    <div class="khungchua">
        <div class="wrapper-khungchua">
            <div class="item-khungchua-left"></div>
            <div class="item-khungchua-center">
                <!-- code trong div này .. tạo class rồi code -->
                <div class="sanpham">
                    <h2 style="text-align: center;">Cập nhật loại sản phẩm</h2>
                    <div class="add_sp">
                        <div class="from">
                            <div class="r">
                                <label for="">Hình ảnh </label>&nbsp;
                                <input type="file" name="hinhanh" id="hinhanh" style="border: none; font-size: 16px;">
                            </div>
                            <div class="r">
                                <div class="c-2">
                                    <label for="">Tên loại sản phẩm</label>
                                    <input style="width:100%; margin-right:60px; height:30px" type="text" id="tensanpham" value="">
                                </div>
                            </div>
                            <div class="r-button">
                                <button class="add">Cập nhật</button>
                                <button id="thoat" class="thoat">Thoát</button>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("thoat").onclick = function() {
                            window.location.href = "index.php?folder=admin&page=admin&adminpage=loaisp";
                        }
                    </script>

                    <!-- code trong div này .. tạo class rồi code -->

                </div>
                <div class="item-khungchua-right"></div>

            </div>
        </div>

    </div>