<h2>Quản lý giỏ hàng</h2>
<div id="quanlygiohang"> 
    
    <table>
        <thead class="thead-light">
            <tr>
                <th width="8.5%">STT</th>
                <th width="25%">Tên sản phẩm</th>
                <th width="20%">Hình</th>
                <th width="15%">Giá</th>
                <th width="10%">Số lượng</th>
                <th width="15%">Thao tác</th>
            </tr>
        </thead>
        <?php 
            $tongGia = 0;
         
            if(isset($_SESSION["GioHang"]))
            {
                $soSanPham = count($gioHang->listProduct);
                
                for($i = 0; $i < $soSanPham; $i++){
                    $id = $gioHang->listProduct[$i]->id;
                    $sql = "SELECT * FROM SanPham WHERE MaSanPham = $id";

                    $result = DataProvider::ExecuteQuery($sql);
                    $row = mysqli_fetch_array($result); 
                    ?>
            
                    <form name="frmGioHang" action="pages/GioHang/xlCapNhatGioHang.php" method="post"> 
                        <tr> 
                            <td><?php echo $i + 1 ?></td></td>
                            <td> 
                                <?php echo $row["TenSanPham"]; ?>
                            </td>
                            <td>
                                <img src="images/<?php echo $row["HinhURL"]; ?>" width="50">
                            </td>
                            <td>
                                <?php echo $row["GiaSanPham"]; ?>
                            </td>
                            <td> 
                                <input type="text" name="txtSL" value="<?php echo $gioHang->listProduct[$i]->num; ?>" width="45" size="5" />
                                <input type="hidden" name="hdID" value="<?php echo $gioHang->listProduct[$i]->id; ?>" />
                                </td>
                                <td>
                                    <input type="submit" value="Cập nhật số lượng" />
                                </td>
                            </tr>
                        </form>
                    <?php 
                    $tongGia += $row["GiaSanPham"] * $gioHang->listProduct[$i]->num; 
                }
                
            }
            $_SESSION["TongGia"] = $tongGia; 
        ?>
    </table>
    <div class="pprice">
        Tổng thành tiền: <?php echo $tongGia; ?> đ
    </div>
    <a class="btn btn-success" href="index.php?a=5&id=<?php echo $row["MaSanPham"]; ?>">Đặt hàng</a> 
</div> 

