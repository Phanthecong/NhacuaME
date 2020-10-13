<h2>Chi tiết sản phẩm</h2>
<?php 
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"]; 
    }
    else 
    {
        DataProvider::ChangeURL("index.php?a=404"); 
    }
    $sql = "SELECT s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.HinhURL, s.MoTa, h.TenHangSanXuat, l.TenLoaiSanPham FROM
SanPham s, HangSanXuat h, LoaiSanPham l WHERE s.BiXoa = 0 AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);

    $row = mysqli_fetch_array($result);
    if($row == null) 
        DataProvider::ChangeURL("index.php?a=404"); 
    
?> 

<div class="container-fluid">
    <div class="row" id="chitietsp">
        <div class="col-sm-6" id="chitietleft">
            <img class="img-fluid" src="images/<?php echo $row["HinhURL"]; ?>">
        </div>
        <div class="col-sm-6" id="chitietright">
            <div> 
                <span class="label">Tên sản phẩm:</span> 
                <span class="productname"><?php echo $row["TenSanPham"]; ?></span> 
            </div> 
            <div> 
                <span class="label">Giá:</span> 
                <span class="price"><?php echo $row["GiaSanPham"]; ?> đ</span> 
            </div> 
            <div> 
                <span class="label">Hãng sản xuất:</span> 
                <span class="factory"><?php echo $row["TenHangSanXuat"]; ?></span> 
            </div>
            <div> 
                <span class="label">Loại sản phẩm:</span> 
                <span class="data"><?php echo $row["TenLoaiSanPham"]; ?></span> 
            </div> 
            <div> 
                <span class="label">Số lượng:</span> 
                <span class="data"><?php echo $row["SoLuongTon"]; ?> sản phẩm</span> 
            </div> 
            <div> 
                <span class="label">Số lượt xem:</span> 
                <span class="data"><?php echo $row["SoLuocXem"] + 1; ?> lược</span> 
            </div>
            <div class="giohang"> 
                <?php 
                    if(isset($_SESSION["MaTaiKhoan"])) 
                    { 
                        ?> 
                            <a class="btn btn-success" href="index.php?a=5&id=<?php echo $row["MaSanPham"]; ?>">Thêm vào giỏ</a> 
                        <?php 
                    } 
                ?> 
            </div>
        </div>
        <div id="mota"> 
            <?php echo $row["MoTa"]; ?> 
        </div> 
    </div>
</div>
<?php  
        $SoLuocXem = $row["SoLuocXem"] + 1; 
        $sql = "UPDATE SanPham SET SoLuocXem = $SoLuocXem 
                WHERE MaSanPham = $id"; 
        DataProvider::ExecuteQuery($sql); 
?> 