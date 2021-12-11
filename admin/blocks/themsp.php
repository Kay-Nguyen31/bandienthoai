<div class="sanpham">
    <h2>Thêm sản phẩm</h2>
    <div class="add_sp">
        <div class="from">
            <div class="r">
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhanh" id="hinhanh" style="border: none; font-size: 16px;">
            </div>
            <div class="r">
                <div class="c-2">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" id="tensanpham" value="">
                </div>
                <div class="c-2">
                    <label for="">Loại sản phẩm</label>
                    <select name="" id="loaisanpham">
                        <option value="">Sữa rữa mặt</option>
                        <option value="">Kem dưỡng</option>
                        <option value="">Mặt nạ</option>
                        <option value="">Son</option>
                    </select>
                </div>
            </div>
            <div class="r">
                <div class="c-2">
                    <label for="giathanh">Giá thành:</label>
                    <input type="text" id="giathanh">
                </div>
                <div class="c-2">
                    <label for="soluong">Số lượng</label>
                    <input type="number" id="soluong" min="1" max="100">
                </div>
            </div>
            <div class="r">
                <div class="c-2">
                    <label for="">Thông tin sản phẩm</label>
                    <textarea name="" id="thongtin" cols="30" rows="10" form="usrform"></textarea>
                </div>
                <div class="c-2">
                    <label for="">Chi tiết sản phẩm</label>
                    <textarea name="" id="thongtinchitiet" cols="30" rows="10" form="usrform"></textarea>
                </div>
            </div>
        </div>
        <div class="r-button">
            <button class="add">Thêm</button>
            <button id="thoat" class="thoat">Thoát</button>        
        </div>
    </div>
</div>
<script>
    document.getElementById("thoat").onclick = function()
    {
        window.location.href= "index.php?folder=admin&page=admin&adminpage=sanpham";
    }  
</script>