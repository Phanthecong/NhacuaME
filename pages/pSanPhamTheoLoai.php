<h2>SẢN PHẨM THEO LOẠI</h2>
<div class="container-fluid">
    <?php
        if(isset($_GET["id"]))
            $id = $_GET["id"];
        else    
            DataProvider::ChangeURL("index.php?a=404");

        $sql = "SELECT * FROM SanPham WHERE BiXoa = 0 AND MaLoaiSanPham = $id";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            ?>
                <div class="row">
                    <div class ="col-sm-4 product_grid">
                        <div class = "card h-100">
                            <div class = "image_product">
                                <img class="card-img-top img-fluid" src="images/<?php echo $row["HinhURL"];?>"/>
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title pname"><?php echo $row["TenSanPham"]; ?> </div>
                                <div class="card-text pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                <div class="action">
                                    <a class="btn btn-success" href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?> ">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!$row = mysqli_fetch_array($result)) break;  ?>
                    <div class ="col-sm-4 product_grid">
                        <div class = "card h-100">
                            <div class = "image_product">
                                <img class="card-img-top img-fluid" src="images/<?php echo $row["HinhURL"];?>"/>
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title pname"><?php echo $row["TenSanPham"]; ?> </div>
                                <div class="card-text pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                <div class="action">
                                    <a class="btn btn-success" href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?> ">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!$row = mysqli_fetch_array($result)) break;  ?>
                    <div class ="col-sm-4 product_grid">
                        <div class = "card h-100">
                            <div class = "image_product">
                                <img class="card-img-top img-fluid" src="images/<?php echo $row["HinhURL"];?>"/>
                            </div>
                            <div class="card-body text-center">
                                <div class="card-title pname"><?php echo $row["TenSanPham"]; ?> </div>
                                <div class="card-text pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                <div class="action">
                                    <a class="btn btn-success" href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?> ">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>
</div>