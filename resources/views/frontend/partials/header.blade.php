<div id="header">
  <div class="header3 header5 header11">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="logo5">
            <a href="index.html"><img src="{{ URL::asset('assets/images/logo.png') }}" alt="" /></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-5 col-xs-12">
          <div class="smart-search search-form3 search-form5">
            <div class="select-category">
              <a href="#" class="category-toggle-link">All</a>
              <ul class="list-category-toggle sub-menu-top">
                <li><a href="#">Computer &amp; Office</a></li>
                <li><a href="#">Elextronics</a></li>
                <li><a href="#">Jewelry &amp; Watches</a></li>
                <li><a href="#">Home &amp; Garden</a></li>
                <li><a href="#">Bags &amp; Shoes</a></li>
                <li><a href="#">Kids &amp; Baby</a></li>
              </ul>
            </div>
            <form class="smart-search-form">
              <input type="text"  name="search" value="i’m shopping for..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
              <input type="submit" value="" />
            </form>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="wrap-cart-info3">
            <ul class="top-info top-info3">
              <li class="top-account has-child">
                <a href="#"><i class="fa fa-user"></i></a>
                <ul class="sub-menu-top">
                  <li><a href="#"><i class="fa fa-user"></i> Account Info</a></li>
                  <li><a href="#"><i class="fa fa-heart-o"></i> Wish List</a></li>
                  <li><a href="#"><i class="fa fa-toggle-on"></i> Compare</a></li>
                  <li><a href="#"><i class="fa fa-unlock-alt"></i> Sign in</a></li>
                  <li><a href="#"><i class="fa fa-sign-in"></i> Checkout</a></li>
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
              <li class="menu-item-has-children">
                <a href="grid.html">Fashion</a>
                <ul class="sub-menu">
                  <li><a href="home-1.html">Home 1</a></li>                  
                </ul>
              </li>              
            </ul>
            <a href="#" class="toggle-mobile-menu"><span> </span></a>
          </nav>
          <!-- End Main Nav -->
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs hidden-sm">
          <div class="category-dropdown hidden-dropdown right-category-dropdown">
            <h2 class="title-category-dropdown"><span>Categories</span></h2>
            <div class="wrap-category-dropdown">
              <ul class="list-category-dropdown">
                <li class="has-cat-mega">
                  <a href="#">Mobiles &amp; Tablets</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat1.png') }}">
                  <div class="cat-mega-menu cat-mega-style1">
                    <div class="row">
                      <div class="col-md-4 col-sm-3">
                        <div class="list-cat-mega-menu">
                          <h2 class="title-cat-mega-menu">Women’s</h2>
                          <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Coats &amp; Jackets</a></li>
                            <li><a href="#">Blouses &amp; Shirts</a></li>
                            <li><a href="#">Tops &amp; Tees</a></li>
                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                            <li><a href="#">Intimates</a></li>
                            <li><a href="#">Swimwear</a></li>
                            <li><a href="#">Pants &amp; Capris</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Accessories</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3">
                        <div class="list-cat-mega-menu">
                          <h2 class="title-cat-mega-menu">Men’s</h2>
                          <ul>
                            <li><a href="#">Tops &amp; Tees</a></li>
                            <li><a href="#">Coats &amp; Jackets</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Suits &amp; Blazer</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Accessories</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3">
                        <div class="zoom-image-thumb">
                          <a href="#"><img alt="" src="{{ URL::asset('assets/images/cat-mega-thumb.png') }}"></a>
                        </div>
                      </div>
                    </div>
                  </div> 
                </li>
                <li class="has-cat-mega">
                  <a href="#">Computers</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat2.png') }}">
                  <div class="cat-mega-menu cat-mega-style2">
                    <h2 class="title-cat-mega-menu">Special products</h2>
                    <div class="row">
                      <div class="col-md-4 col-sm-3">
                        <div class="item-category-featured-product first-item">
                          <div class="product-thumb">
                            <a class="product-thumb-link" href="#">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/3.jpg') }}" class="first-thumb">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/4.jpg') }}" class="second-thumb">
                            </a>
                            <div class="product-info-cart">
                              <div class="product-extra-link">
                                <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                              </div>
                              <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                          </div>
                          <div class="product-info">
                            <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
                            <div class="info-price">
                              <span>$59.52 </span>
                              <del>$17.96</del>
                            </div>
                            <div class="product-rating">
                              <div class="inner-rating"></div>
                              <span>(3s)</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3">
                        <div class="item-category-featured-product">
                          <div class="product-thumb">
                            <a class="product-thumb-link" href="#">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/21.jpg') }}" class="first-thumb">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/22.jpg') }}" class="second-thumb">
                            </a>
                            <div class="product-info-cart">
                              <div class="product-extra-link">
                                <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                              </div>
                              <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                          </div>
                          <div class="product-info">
                            <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
                            <div class="info-price">
                              <span>$59.52 </span>
                              <del>$17.96</del>
                            </div>
                            <div class="product-rating">
                              <div class="inner-rating"></div>
                              <span>(3s)</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-3">
                        <div class="item-category-featured-product">
                          <div class="product-thumb">
                            <a class="product-thumb-link" href="#">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/11.jpg') }}" class="first-thumb">
                              <img alt="" src="{{ URL::asset('assets/images/photos/extras/12.jpg') }}" class="second-thumb">
                            </a>
                            <div class="product-info-cart">
                              <div class="product-extra-link">
                                <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                              </div>
                              <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                          </div>
                          <div class="product-info">
                            <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
                            <div class="info-price">
                              <span>$59.52 </span>
                              <del>$17.96</del>
                            </div>
                            <div class="product-rating">
                              <div class="inner-rating"></div>
                              <span>(3s)</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="#">Electronics</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat3.png') }}">
                </li>
                <li>
                  <a href="#">Fashion</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat4.png') }}">
                </li>
                <li>
                  <a href="#">Footwear</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat5.png') }}">
                </li>
                <li>
                  <a href="#">Jewelry &amp; Watches</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat6.png') }}">
                </li>
                <li>
                  <a href="#">Home &amp; Kitchen</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat7.png') }}">
                </li>
                <li>
                  <a href="#">Home Appliances</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat8.png') }}">
                </li>
                <li>
                  <a href="#">Beauty &amp; Perfumes</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat9.png') }}">
                </li>
                <li>
                  <a href="#">Sports &amp; Outdoors</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat10.png') }}">
                </li>
                <li style="display: none;">
                  <a href="#">Computers</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat2.png') }}">
                </li>
                <li style="display: none;">
                  <a href="#">Electronics</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat3.png') }}">
                </li>
                <li style="display: none;">
                  <a href="#">Fashion</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat4.png') }}">
                </li>
                <li style="display: none;">
                  <a href="#">Footwear</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat5.png') }}">
                </li>
                <li style="display: none;">
                  <a href="#">Jewelry &amp; Watches</a>
                  <img alt="" src="{{ URL::asset('assets/images/cat6.png') }}">
                </li>
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