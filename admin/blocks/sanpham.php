<div class="container-danhsachsanpham">
    <div class="wrapper-danhsachsanpham">
        <h2 style="    text-align: center;">Danh sách sản phẩm đang kinh doanh</h2>
        <div class="bnt_addsanpham">
            <input class="btn_them" type="submit" value="Thêm sản phẩm" id="themsp">
        </div>
        <div class="table-danhsachsanpham">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Mức giá </th>
                    <th></th>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>Son Dưỡng</td>
                    <td >10</td>
                    <td >103.000đ</td>
                    <td >
                        <input type="button" id="suasp" value="Sửa" style="background: #FFA500;color:white;border-radius:8px">
                        <input type="button" id="xoasp" value="Xóa" style="background: #FF0000;color:white;border-radius:8px">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Son Dưỡng</td>
                    <td >10</td>
                    <td >103.000đ</td>
                    <td >
                        <input type="button" value="Sửa" style="background: #FFA500;color:white;border-radius:8px">
                        <input type="button" value="Xóa" style="background: #FF0000;color:white;border-radius:8px">
                    </td>
                </tr>
               
        
            </table>
        </div>
    </div>
</div>
<script>
    document.getElementById("themsp").onclick = function()
    {
        window.location.href= "index.php?folder=admin&page=admin&adminpage=themsp";
    }  
    document.getElementById("suasp").onclick = function()
    {
        window.location.href= "index.php?folder=admin&page=admin&adminpage=suasp";
    }  
</script>