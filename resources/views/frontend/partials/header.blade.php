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
                <a href="#" class="language-selected"><img src="{{ URL::asset('assets/images/flag-en.png') }}" alt=""/></a>
                <ul class="sub-menu-top">
                  <li><a href="#"><img src="{{ URL::asset('assets/images/flag-england.jpg') }}" alt=""/>English</a></li>
                  <li><a href="#"><img src="{{ URL::asset('assets/images/flag-french.jpg') }}" alt=""/>French</a></li>
                  <li><a href="#"><img src="{{ URL::asset('assets/images/flag-german.jpg') }}" alt=""/>German</a></li>
                </ul>
              </li>
              <li class="top-currency has-child">
                <a href="#" class="currency-selected">$</a>
                <ul class="sub-menu-top">
                  <li><a href="#"><span>€</span>EUR</a></li>
                  <li><a href="#"><span>¥</span>JPY</a></li>
                  <li><a href="#"><span>$</span>USD</a></li>
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
              <li class="menu-item-has-children">
                <a href="#">home</a>
                <ul class="sub-menu">
                  <li><a href="home-1.html">Home 1</a></li>
                  <li><a href="home-2.html">Home 2</a></li>
                  <li><a href="home-3.html">Home 3</a></li>
                  <li><a href="home-4.html">Home 4</a></li>
                  <li><a href="home-5.html">Home 5</a></li>
                  <li><a href="home-6.html">Home 6</a></li>
                  <li><a href="home-7.html">Home 7</a></li>
                  <li><a href="home-8.html">Home 8</a></li>
                  <li><a href="home-9.html">Home 9</a></li>
                  <li><a href="home-10.html">Home 10</a></li>
                  <li><a href="home-11.html">Home 11</a></li>
                  <li><a href="home-12.html">Home 12</a></li>
                </ul>
              </li>
              <li class="has-mega-menu">
                <a href="grid.html">Fashion</a>
                <div class="mega-menu mega-menu-style1">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="mega-hot-deal">
                        <h2 class="mega-menu-title">Hot deals</h2>
                        <div class="mega-hot-deal-slider">
                          <div class="wrap-item">
                            <div class="item-deal-product">
                              <div class="product-thumb">
                                <a href="#" class="product-thumb-link">
                                  <img src="{{ URL::asset('assets/images/photos/furniture/6.jpg') }}" alt="" class="first-thumb">
                                  <img src="{{ URL::asset('assets/images/photos/furniture/5.jpg') }}" alt="" class="second-thumb">
                                </a>
                                <div class="product-info-cart">
                                  <div class="product-extra-link">
                                    <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                    <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                  </div>
                                  <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <h3 class="title-product"><a href="#">Pok Chair Classicle</a></h3>
                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                <div class="info-price-deal">
                                  <span>$59.52</span> <label>-30%</label>
                                </div>
                                <div class="deal-shop-social">
                                  <a class="deal-shop-link" href="#">shop now</a>
                                  <div class="social-deal social-network">
                                    <ul>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s1.png') }}" alt=""></a></li>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s2.png') }}" alt=""></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item-deal-product">
                              <div class="product-thumb">
                                <a href="#" class="product-thumb-link">
                                  <img src="{{ URL::asset('assets/images/photos/extras/17.jpg') }}" alt="" class="first-thumb">
                                  <img src="{{ URL::asset('assets/images/photos/extras/16.jpg') }}" alt="" class="second-thumb">
                                </a>
                                <div class="product-info-cart">
                                  <div class="product-extra-link">
                                    <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                    <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                  </div>
                                  <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <h3 class="title-product"><a href="#">Fashion Mangto</a></h3>
                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                <div class="info-price-deal">
                                  <span>$59.52</span> <label>-30%</label>
                                </div>
                                <div class="deal-shop-social">
                                  <a class="deal-shop-link" href="#">shop now</a>
                                  <div class="social-deal social-network">
                                    <ul>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s1.png') }}" alt=""></a></li>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s2.png') }}" alt=""></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item-deal-product">
                              <div class="product-thumb">
                                <a href="#" class="product-thumb-link">
                                  <img src="{{ URL::asset('assets/images/photos/sport/7.jpg') }}" alt="" class="first-thumb">
                                  <img src="{{ URL::asset('assets/images/photos/sport/6.jpg') }}" alt="" class="second-thumb">
                                </a>
                                <div class="product-info-cart">
                                  <div class="product-extra-link">
                                    <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                    <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                  </div>
                                  <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <h3 class="title-product"><a href="#">T-Shirt Sport</a></h3>
                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                <div class="info-price-deal">
                                  <span>$59.52</span> <label>-30%</label>
                                </div>
                                <div class="deal-shop-social">
                                  <a class="deal-shop-link" href="#">shop now</a>
                                  <div class="social-deal social-network">
                                    <ul>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s1.png') }}" alt=""></a></li>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s2.png') }}" alt=""></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item-deal-product">
                              <div class="product-thumb">
                                <a href="#" class="product-thumb-link">
                                  <img src="{{ URL::asset('assets/images/photos/extras/14.jpg') }}" alt="" class="first-thumb">
                                  <img src="{{ URL::asset('assets/images/photos/extras/13.jpg') }}" alt="" class="second-thumb">
                                </a>
                                <div class="product-info-cart">
                                  <div class="product-extra-link">
                                    <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                    <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                  </div>
                                  <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                </div>
                              </div>
                              <div class="product-info">
                                <h3 class="title-product"><a href="#">Bag Goodscol model</a></h3>
                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                <div class="info-price-deal">
                                  <span>$59.52</span> <label>-30%</label>
                                </div>
                                <div class="deal-shop-social">
                                  <a class="deal-shop-link" href="#">shop now</a>
                                  <div class="social-deal social-network">
                                    <ul>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s1.png') }}" alt=""></a></li>
                                      <li><a href="#"><img src="{{ URL::asset('assets/images/s2.png') }}" alt=""></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="mega-new-arrival">
                        <h2 class="mega-menu-title">New Arrivals</h2>
                        <div class="mega-new-arrival-slider">
                          <div class="wrap-item">
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/18.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/17.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/21.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/20.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/19.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/15.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/3.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/4.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="has-mega-menu">
                <a href="list.html">Furniture</a>
                <div class="mega-menu">
                  <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                      <div class="mega-adv">
                        <div class="mega-adv-thumb zoom-image-thumb">
                          <a href="#"><img src="{{ URL::asset('assets/images/photos/newintoday/bag-shoes.jpg') }}" alt="" /></a>
                        </div>
                        <div class="mega-adv-info">
                          <h3><a href="#">Examplui coloniu tencaug</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <a class="more-detail" href="#">More Detail</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="mega-new-arrival">
                        <h2 class="mega-menu-title">Featured Product</h2>
                        <div class="mega-new-arrival-slider">
                          <div class="wrap-item">
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/17.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/18.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/20.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/21.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/15.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/19.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                              <div class="item-product">
                                <div class="product-thumb">
                                  <a href="detail.html" class="product-thumb-link">
                                    <img src="{{ URL::asset('assets/images/photos/extras/4.jpg') }}" alt="" class="first-thumb">
                                    <img src="{{ URL::asset('assets/images/photos/extras/3.jpg') }}" alt="" class="second-thumb">
                                  </a>
                                  <div class="product-info-cart">
                                    <div class="product-extra-link">
                                      <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                      <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                      <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                  </div>
                                </div>
                                <div class="product-info">
                                  <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                  <div class="info-price">
                                    <span>$59.52</span><del>$17.96</del>
                                  </div>
                                  <div class="product-rating">
                                    <div style="width:100%" class="inner-rating"></div>
                                    <span>(6s)</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Item -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="menu-item-has-children">
                <a href="grid.html">Food</a>
                <ul class="sub-menu">
                  <li><a href="#">Pizza</a></li>
                  <li><a href="#">Noodle</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Cake</a>
                    <ul class="sub-menu">
                      <li><a href="#">lemon cake</a></li>
                      <li><a href="#">mousse cake</a></li>
                      <li><a href="#">carrot cake</a></li>
                      <li><a href="#">chocolate cake</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drink</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="grid.html">Electronis</a>
                <ul class="sub-menu">
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Laptop</a></li>
                  <li><a href="#">Camera</a></li>
                  <li><a href="#">Accessories</a></li>
                </ul>
              </li>
              <li><a href="list.html">Sports</a></li>
              <li class="menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                  <li><a href="accordions.html">Accordions</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="chart-processbar.html">Charts & Progress Bars</a></li>
                  <li><a href="feature-boxes.html">Feature Boxes</a></li>
                  <li><a href="message-boxes.html">Message Boxes</a></li>
                  <li><a href="teams.html">Teams</a></li>
                  <li><a href="testimonial.html">Testimonials</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="blog-v1.html">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog-v1.html">Blog V1</a></li>
                  <li><a href="blog-v2.html">Blog V2</a></li>
                  <li><a href="blog-v3.html">Blog V3</a></li>
                  <li><a href="blog-full.html">Blog Fullwidth</a></li>
                  <li><a href="single.html">Single Post</a></li>
                </ul>
              </li>
            </ul>
            <a href="#" class="toggle-mobile-menu"><span>Menu</span></a>
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