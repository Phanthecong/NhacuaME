<div class="modal fade" id="modalRegisForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form name="frmLogin" action="../../NhaCuaMe/modules/xlDangKy.php" method="post" onsubmit="return KiemTraDangNhap()">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Đăng ký tài khoản</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form">
                    <i class=""></i>
                    <input type="text" name="us" id="us" placeholder="Tên đăng nhập" class="form-control">
                    <div class="clearfix"></div>
                </div>

                <div class="md-form">
                    <i class=""></i>
                    <input type="password" name="ps" id="ps" placeholder="Mật khẩu" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="md-form">
                    <i class=""></i>
                    <input type="password" id="rps" placeholder="Nhập lại mật khẩu" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="md-form">
                    <i class=""></i>
                    <input type="text" id="name" name="name" placeholder="Tên hiển thị" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="md-form">
                    <i class=""></i>
                    <input type="text" id="add" name="add" placeholder="Địa chỉ" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="md-form">
                    <i class=""></i>
                    <input type="text" id="tel" name="tel" placeholder="Điện thoại" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="md-form">
                    <i class=""></i>
                    <input type="text" id="mail" name="mail" placeholder="Email" class="form-control">
                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default">Đăng ký</button>
            </div>
        </form>
        </div>
    </div>
</div>