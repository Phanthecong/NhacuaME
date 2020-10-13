<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="frmLogin" action="../../NhaCuaMe/modules/xlDangNhap.php" method="post" onsubmit="return KiemTraDangNhap()">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Đăng nhập tài khoản</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form">
            <i class="fa fa-user"></i>
            <input type="text" name="txtUS" id="txtUS" placeholder="Tên tài khoản" class="form-control">
            <div class="clearfix"></div>
          </div>

          <div class="md-form">
            <i class="fas fa-lock"></i>
            <input type="password" name="txtPS" id="txtPS" placeholder="Mật khẩu" class="form-control">
            <div class="clearfix"></div>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Đăng nhập</button>
        </div>
      </form>
    </div>
  </div>
</div>