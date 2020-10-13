<div id=header>
    <nav class="navbar navbar-expand-sm navbar-custom">
        <div class = "container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="../../NhaCuaMe/img/nhacuame.png" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Hãng sản xuất
                        </a>
                        <div class="dropdown-menu">
                            <?php
                                $sql = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
                                $result = DataProvider::ExecuteQuery($sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <a class="dropdown-item" href="index.php?a=2&id=<?php echo $row["MaHangSanXuat"]; ?>">
                                        <?php echo $row["TenHangSanXuat"]; ?>
                                        </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Loại sản phẩm
                        </a>
                        <div class="dropdown-menu">
                            <?php
                                $sql = "SELECT * FROM LoaiSanPham WHERE BiXoa = 0";
                                $result = DataProvider::ExecuteQuery($sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <a class="dropdown-item" href="index.php?a=3&id=<?php echo $row["MaLoaiSanPham"];?>">
                                            <?php echo $row["TenLoaiSanPham"]; ?>
                                        </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </li>           
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php
                        if(isset($_SESSION["MaTaiKhoan"]))
                        {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Hello <?php echo $_SESSION["TenHienThi"]; ?></a>
                                </li>
                                
                                <li class ="nav-item">
                                    <a class ="nav-link" href="index.php?a=5">
                                        <i class="fas fa-shopping-cart"></i>
                                        Giỏ hàng
                                    </a>
                                </li>
                                <li class ="nav-item">
                                    <a class ="nav-link" href="../../NhaCuaMe/modules/xlDangXuat.php">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Đăng xuất
                                    </a>
                                </li>
                            <?php
                        }
                        else
                        {
                            include "mModalLogin.php";
                            include "mModalRegister.php"
                            ?>
                                <li class ="nav-item">
                                    <a class ="nav-link" href="" data-toggle="modal" data-target="#modalRegisForm">
                                        <i class="fa fa-user"></i>
                                        Đăng ký
                                    </a>
                                </li>
                                <li class ="nav-item">
                                    <a class ="nav-link" href="" data-toggle="modal" data-target="#modalLoginForm">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Đăng nhập
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class ="col-sm-12">
                <img src="../../NhaCuaMe/img/header_img.jpg" width ="100%">
            </div>
        </div>
       
    </div>

</div>

    
