<?php 
$loaiSpList = DB::table('loai_sp')->where('status', 1)->orderBy('display_order')->get();
?>
<div id="header">
  <div class="header3 header5 header11" style="padding:5px;padding-bottom:10px">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="logo5">
            <a href="{{ route('home') }}"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="Logo NS" height="80px" /></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-5 col-xs-12" style="padding-top:20px">
          <div class="smart-search search-form3 search-form5">
            
            <form class="smart-search-form">
              <input type="text"  name="search" value="i’m shopping for..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
              <input type="submit" value="" />
            </form>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12"  style="padding-top:20px">
          <div class="wrap-cart-info3">
            <ul class="top-info top-info3">
              <li class="top-account has-child">
                <a href="#"><i class="fa fa-user"></i></a>
                <!--<ul class="sub-menu-top">
                  <li><a href="#"><i class="fa fa-user"></i> Account Info</a></li>
                  <li><a href="#"><i class="fa fa-heart-o"></i> Wish List</a></li>
                  <li><a href="#"><i class="fa fa-toggle-on"></i> Compare</a></li>
                  <li><a href="#"><i class="fa fa-unlock-alt"></i> Sign in</a></li>
                  <li><a href="#"><i class="fa fa-sign-in"></i> Checkout</a></li>
                </ul>-->
                <ul class="user-ajax-guest sub-menu-top">
                    <li id="login_link"><a class="user-name-login" title="Đăng Nhập" href="javascript:(void);" class="link" data-dismiss="modal" data-toggle="modal" data-target="#modalLoginFrom"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                    <li id="login_fb_link" class="login-by-facebook-popup">
                    <a data-url="#" title="Đăng nhập bằng Facebook" class="user-name-loginfb"><i class="fa fa-facebook-square"></i><span>Đăng nhập bằng</span><span> Facebook</span></a>
                    </li>
                    <li class="user-name-register">
                      <a title="Tạo tài khoản mới" class="link" data-dismiss="modal" data-toggle="modal" data-target="#modalRegisterFrom"><i class="fa fa-user"></i><span>Tạo tài khoản</span></a>
                    </li>
                  </ul>
              </li>
              <li class="top-language has-child">
                <a href="javascript:void(0);" class="language-selected"><img src="{{ URL::asset('assets/images/vn.png') }}" alt="Tiếng Việt"/></a>
                <ul class="sub-menu-top">                  
                  <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/vn.png') }}" alt="Tiếng Việt" data-lang='vi' class="lang"/>Tiếng Việt</a></li>
                  <li><a href="javascript:void(0);"><img src="{{ URL::asset('assets/images/flag-england.jpg') }}" alt="English" data-lang="en" class="lang" />English</a></li>                  
                </ul>
              </li>              
            </ul>
            <div class="mini-cart mini-cart-3">
              <a class="header-mini-cart3 header-mini-cart5">
                <span class="total-mini-cart-icon"></span>
                <span class="total-mini-cart-item">0</span>
              </a>
              <div class="content-mini-cart">
                <h2>(2) ITEMS IN MY CART</h2>
                <ul class="list-mini-cart-item">
                  <li>
                    <div class="mini-cart-edit">
                      <a class="delete-mini-cart-item" href="#"><i class="fa fa-trash-o"></i></a>
                      <a class="edit-mini-cart-item" href="#"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="mini-cart-thumb">
                      <a href="#"><img alt="" src="{{ URL::asset('assets/images/mini-cart-thumb.png') }}"></a>
                    </div>
                    <div class="mini-cart-info">
                      <h3><a href="#">Burberry Pink &amp; black</a></h3>
                      <div class="info-price">
                        <span>$59.52</span>
                        <del>$17.96</del>
                      </div>
                      <div class="qty-product">
                        <span class="qty-down">-</span>
                        <span class="qty-num">1</span>
                        <span class="qty-up">+</span>
                      </div>
                    </div>
                  </li>                 
                </ul>
                <div class="mini-cart-total">
                  <label>TOTAL</label>
                  <span>$24.28</span>
                </div>
                <div class="mini-cart-button">
                  <a class="mini-cart-view" href="#">view my cart </a>
                  <a class="mini-cart-checkout" href="#">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header 3 -->
  <div class="header-nav5">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
          <nav class="main-nav main-nav5">
            <ul>
              <li>
                <a href="{{ route('home') }}">{{ trans('text.home') }}</a>                
              </li>              
              @foreach($loaiSpList as $loaiSp) 
              <?php 
              $loai_id = $loaiSp->id;
              $cateList = DB::table('cate')->where('loai_id', $loai_id)->orderBy('display_order')->get();
              
              ?>
              <li class="@if(!empty($cateList)) menu-item-has-children @endif">
                <a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loaiSp->slug_vi]) : route('danh-muc-cha', [$loaiSp->slug_en]) }}">{{ $lang == 'vi' ? $loaiSp->name_vi : $loaiSp->name_en }}</a>
                @if(!empty($cateList))
                <ul class="sub-menu">
                  @foreach($cateList as $cate)
                  <li><a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loaiSp->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loaiSp->slug_en, $cate->slug_en]) }}">{{ $lang == 'vi' ? $cate->name_vi : $cate->name_en }}</a></li>                  
                  @endforeach
                </ul>
                @endif
              </li>
              @endforeach
            </ul>
            <a href="#" class="toggle-mobile-menu"><span> </span></a>
          </nav>
          <!-- End Main Nav -->
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm">
          <div class="category-dropdown hidden-dropdown right-category-dropdown">
            <h2 class="title-category-dropdown"><span>Danh mục</span></h2>
            <div class="wrap-category-dropdown">
              <ul class="list-category-dropdown">
                @foreach($loaiSpList as $loaiSp) 
                <?php 
                $loai_id = $loaiSp->id;
                $cateList = DB::table('cate')->where('loai_id', $loai_id)->orderBy('display_order')->get();
                
                ?>
                <li class="@if(!empty($cateList)) has-cat-mega @endif">
                  <a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loaiSp->slug_vi]) : route('danh-muc-cha', [$loaiSp->slug_en]) }}">{{ $lang == 'vi' ? $loaiSp->name_vi : $loaiSp->name_en }}</a>               
                  @if(!empty($cateList))
                  <div class="cat-mega-menu cat-mega-style1" style="width:300px">
                    <div class="row">
                      <div class="col-md-12 col-sm-3">
                        <div class="list-cat-mega-menu">
                          @foreach($cateList as $cate)
                          <h2 class="title-cat-mega-menu"><a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loaiSp->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loaiSp->slug_en, $cate->slug_en]) }}">{{ $lang == 'vi' ? $cate->name_vi : $cate->name_en }}</a></h2>
                          @endforeach
                        </div>
                      </div> 
                    </div>
                  </div> 
                  @endif
                </li>                
                @endforeach
              </ul>
              <a class="expand-category-link" href="#"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Nav -->
</div>  