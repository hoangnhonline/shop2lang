<div id="footer">
    <div class="footer5 footer11">
      <div class="container">
        <div class="footer-top footer-top5">
          <div class="logo-footer">
            <a href="{{ route('home') }}"><img alt="Logo NS" src="{{ URL::asset('assets/images/logo.png') }}" height="45px"></a>
          </div>
          <div class="menu-footer">
            <ul>
              <li>
                <a href="{{ route('home') }}">{{ trans('text.trang-chu') }}</a>
              </li>
              @foreach($loaiSpList as $loaiSp)              
              <li>
                <a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loaiSp->slug_vi]) : route('danh-muc-cha', [$loaiSp->slug_en]) }}">{{ $lang == 'vi' ? $loaiSp->name_vi : $loaiSp->name_en }}</a>                
              </li>
              @endforeach              
            </ul>
          </div>
        </div>        
        <!-- End Online Shipping -->
        <div class="list-footer-box5">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box">
                <h2>My Account</h2>
                <ul class="footer-menu-box">
                  <li><a href="#">My orders</a></li>
                  <li><a href="#">My credit slips</a></li>
                  <li><a href="#">My addresses</a></li>
                  <li><a href="#">My personal info</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box">
                <h2>Help</h2>
                <ul class="footer-menu-box">
                  <li><a href="#">Where's my order?</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Payments</a></li>
                  <li><a href="#">Redeem a gift voucher</a></li>
                  <li><a href="#">Delivery &amp; returns</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box">
                <h2>Further information</h2>
                <ul class="footer-menu-box">
                  <li><a href="#">Drop Everything</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Affiliate programme</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Terms &amp; conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box">
                <h2>Contact Us</h2>
                <ul class="footer-box-contact">
                  <li><i class="fa fa-home"></i> Our business address is 1063 Free</li>
                  <li><i class="fa fa-mobile"></i> + 020.566.8866</li>
                  <li><i class="fa fa-envelope"></i> <a href="mailto:support@7-Up.com">support@7-Up.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End List Box -->
        <div class="footer-bottom5">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="copyright">
                <p>All Rights Reserved. Powered by <a href="mailto:hoangnhonline@gmail.com">hoangnhonline@gmail.com</a></p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="payment2 payment-method">
                <a href="#"><img alt="" src="{{ URL::asset('assets/images/pay1.png') }}"></a>
                <a href="#"><img alt="" src="{{ URL::asset('assets/images/pay2.png') }}"></a>
                <a href="#"><img alt="" src="{{ URL::asset('assets/images/pay3.png') }}"></a>
                <a href="#"><img alt="" src="{{ URL::asset('assets/images/pay4.png') }}"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer -->