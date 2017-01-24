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
            @foreach($footerArr as $footer)
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-box">
                <h2>{{ $lang == 'vi' ? $footer->name_vi : $footer_name_en }}</h2>
                <?php echo $lang == 'vi' ? $footer->content_vi  : $footer->content_en; ?>
              </div>
            </div>
            @endforeach            
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