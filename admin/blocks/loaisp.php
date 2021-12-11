<div class="container-khungchua">
    <div class="khungchua">
        <div class="wrapper-khungchua">
            <div class="item-khungchua-left"></div>
            <div class="item-khungchua-center">
                <!-- code trong div này .. tạo class rồi code -->
                <div class="lsp-container">
                    <div class="lsp-main" >
                        <div class="lsp-title">
                            <h2>Danh sách loại sản phẩm</h2>
                        </div>
                        <div class="lsp-them">
                           <a href="index.php?folder=admin&page=admin&adminpage=themloaisp"><button id="themlsp" style="color:white">Thêm loại sản phẩm</button></a>
                        </div>
                        <div class="lsp-timkiem">
                            <input type="text" placeholder="Tìm kiếm..">
                            <input id="lsp-tk-btn" type="button" value="Tìm kiếm">
                        </div>
                        <div class="lsp-content">
                            <table>
                                <thead>
                                    <th>STT</th>
                                    <th>Tên loại sản phẩm</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Son Black Rough Air Fit Velvet Tint</td>
                                        <td><button class="lsp-cn-btn"><a href="index.php?folder=admin&page=admin&adminpage=capnhatloaisp">Cập nhật</a></button></td>
                                        <td><button class="lsp-xoa-btn"><a href="">Xoá</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Son Black Rough Air Fit Velvet Tint</td>
                                        <td><button class="lsp-cn-btn"><a href="">Cập nhật</a></button></td>
                                        <td><button class="lsp-xoa-btn"><a href="">Xoá</a></button></td>
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