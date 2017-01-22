<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
  <div class="sidebar-shop sidebar-left">
    <div class="widget widget-filter">
      <div class="box-filter category-filter">
        <h2 class="widget-title">{{ trans('text.account') }}</h2>
        <ul>
            <li {{ \Request::route()->getName() == "account-info" ? "class=active" : "" }}>
                <a href="{{ route('account-info') }}" title="Cập nhật thông tin"> Cập nhật thông tin</a>
            </li>
            <li {{ \Request::route()->getName() == "order-history" || \Request::route()->getName() == "order-detail" ? "class=active" : "" }}>
                <a href="{{ route('order-history') }}" title="Đơn hàng của tôi"> Đơn hàng của tôi</a>
            </li>            
            @if(Session::get('facebook_id') == null)
            <li {{ \Request::route()->getName() == "change-password" ? "class=active" : "" }}>
                <a href="{{ route('change-password') }}" title="Đổi mật khẩu"> Đổi mật khẩu</a>
            </li>
            @endif
            <li>
                <a href="{{ route('user-logout') }}" title="Thoát tài khoản">Thoát tài khoản </a>
            </li>   
        </ul>
      </div>
    </div>
    
    <!-- End Vote -->
    <div class="widget widget-adv">
      <h2 class="title-widget-adv">
        <span>Week</span>
        <strong>big sale</strong>
      </h2>
      <div class="wrap-item">
        <div class="item">
          <div class="item-widget-adv">
            <div class="adv-widget-thumb">
              <a href="#"><img src="images/grid/sl1.jpg" alt="" /></a>
            </div>
            <div class="adv-widget-info">
              <h3>New Collection</h3>
              <h2><span>from</span> 40% off</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item-widget-adv">
            <div class="adv-widget-thumb">
              <a href="#"><img src="images/grid/sl2.jpg" alt="" /></a>
            </div>
            <div class="adv-widget-info">
              <h3>Quality usinesswear </h3>
              <h2><span>from</span> 30% off</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item-widget-adv">
            <div class="adv-widget-thumb">
              <a href="#"><img src="images/grid/sl3.jpg" alt="" /></a>
            </div>
            <div class="adv-widget-info">
              <h3>Hanbags Style 2016</h3>
              <h2><span>from</span> 20% off</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Adv -->
  </div>
  <!-- End Sidebar Shop -->
</div>