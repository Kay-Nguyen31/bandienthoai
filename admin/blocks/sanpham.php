<div class="container-khungchua">
    <div class="khungchua">
        <div class="wrapper-khungchua">
            <div class="item-khungchua-left"></div>
            <div class="item-khungchua-center">
                <!-- code trong div này .. tạo class rồi code -->
                <div class="lsp-container">
                    <div class="lsp-main" s\>
                        <div class="lsp-title">
                            <h2>Danh sách sản phẩm</h2>
                        </div>
                        <div class="lsp-them">
                           <a href="index.php?folder=admin&page=admin&adminpage=themsp"><button id="themlsp" style="color:white">Thêm sản phẩm</button></a>
                        </div>
                        <div class="lsp-timkiem">
                            <input type="text" placeholder="Tìm kiếm..">
                            <input id="lsp-tk-btn" type="button" value="Tìm kiếm">
                        </div>
                        <div class="lsp-content">
                        <table>
                                <thead>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Loại</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Thị B</td>
                                        <td>0123456789</td>
                                        <td>Nữ</td>
                                        <td>03/03/2000</td>
                                        <td>Cần Thơ</td>
                                        <td><button class="sp-btn"><a href="index.php?folder=admin&page=admin&adminpage=capnhatsp">Cập nhật</a></button></td>
                                        <td><button class="sp-btn"><a href="">Xoá</a></button></td>
                                    </tr>
                                   
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
<script>
    document.getElementById("themlsp").onclick = function()
    {
        window.location.href= "index.php?folder=admin&page=admin&adminpage=themloaisp";
    }  
</script>