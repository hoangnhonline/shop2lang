<div id="register-form" style="display:none" class="member-form">
                                     
  <div class="clearfix"></div>
  <form id="register_popup_form" class="content bv-form" method="POST" novalidate>
    {{ csrf_field() }}    
    <div form-group="" id="general_error"> <span></span> </div>

    <div class="form-group" id="register_email">
      <label class="control-label" for="email"><strong>Email:</strong></label>
      <div class="input-wrap has-feedback @if(Session::has('validate')) has-error @endif">
        <input type="text" class="form-control register register-email-input " name="email" id="email_register_1" placeholder="Nhập Email" data-bv-field="email" autocomplete="false">
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Email</small>
          @if(Session::has('validate'))
          <small class="help-block" data-bv-validator="remote" data-bv-for="email" data-bv-result="NOT_VALIDATED">Email đã tồn tại</small>
          @endif
        </div>
    </div>
    <div class="form-group" id="register_password">
      <label class="control-label" for="pasword"><strong>Mật khẩu:</strong></label>
      <div class="input-wrap has-feedback">
        <input type="password" class="form-control register" name="password" id="password_register_1" placeholder="Mật khẩu từ 6 đến 32 ký tự" autocomplete="off" data-bv-field="password">
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Mật khẩu</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">Mật khẩu phải dài từ 6 đến 32 ký tự</small></div>
    </div>
    <div class="form-group" id="register_name">
      <label class="control-label" for="full_name"><strong>Họ tên</strong></label>
      <div class="input-wrap has-feedback">
        <input type="text" class="form-control register" name="full_name" id="full_name_register_1" placeholder="Nhập họ tên" data-bv-field="full_name">
        <small class="help-block" data-bv-validator="notEmpty" data-bv-for="full_name" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập Họ tên</small></div>
    </div>
    <div class="form-group policy-group">
      <div class="input-wrap">
        <p class="policy">Khi bạn nhấn Đăng ký, bạn  đã đồng ý thực hiện mọi giao dịch mua bán theo <a target="_blank" href="#" class="link">điều kiện sử dụng và chính sách của iCho</a>.</p>
      </div>
    </div>
    <div class="form-group last">
      <div id="register_popup_submit_1" class="btn btn-danger btn-block">Đăng ký</div>
    </div>
  </form>
  </div>
  <!-- Register form -->