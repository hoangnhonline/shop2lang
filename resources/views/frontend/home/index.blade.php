@extends('frontend.layout')
@section('content')
<div class="container">
  <div class="banner-slider5 simple-owl-slider">
    <div class="wrap-item">
      <div class="item-banner5">
        <div class="banner-thumb">
          <a href="#"><img src="{{ URL::asset('assets/images/slide1.jpg') }}" alt="" /></a>
        </div>
        <div class="banner-info">
          <h3>happy new year 2016</h3>
          <h2>exta 45% off </h2>
          <a href="#" class="shop-now">shop now</a>
        </div>
      </div>
      <div class="item-banner5">
        <div class="banner-thumb">
          <a href="#"><img src="{{ URL::asset('assets/images/slide2.jpg') }}" alt="" /></a>
        </div>
        <div class="banner-info style2">
          <h3>spectacular</h3>
          <h2>exta 35% off </h2>
          <a href="#" class="shop-now">shop now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Banner Slider -->
  <div class="privacy-shipping privacy-shipping11">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="item-privacy-shipping">
          <ul>
            <li><i class="fa fa-usd"></i></li>
            <li>
              <h2>30 DAYS RETURN</h2>
              <span>money back</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="item-privacy-shipping">
          <ul>
            <li><i class="fa fa-truck"></i></li>
            <li>
              <h2>FREE SHIPPING</h2>
              <span>on all orders over $99</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="item-privacy-shipping">
          <ul>
            <li><i class="fa fa-database"></i></li>
            <li>
              <h2>LOWEST PRICE</h2>
              <span>guarantee</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="item-privacy-shipping">
          <ul>
            <li><i class="fa fa-hand-o-right"></i></li>
            <li>
              <h2>SAFE SHOPPING</h2>
              <span>guarantee 100%</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Price Shipping -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="#" data-toggle="tab">Electronics</a></li>
        <li><a href="#" data-toggle="tab">Mobile</a></li>
        <li><a href="#" data-toggle="tab">Tablet</a></li>
        <li><a href="#" data-toggle="tab">Computer</a></li>
        <li><a href="#" data-toggle="tab">Macbook pro</a></li>
        <li><a href="#" data-toggle="tab">Camere</a></li>
        <li><a href="#" data-toggle="tab">accessories</a></li>
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/1.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/2.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$40.60 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/3.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/4.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$30.99 </span>
                <del>$327.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/5.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/6.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$59.52</span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/7.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/8.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/9.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/10.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/11.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/12.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/0.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/1.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/mobile/2.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/mobile/3.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad1.jpg') }}" alt="" /></a>
  </div>
  <!-- End Adv -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="#" data-toggle="tab">Fashion</a></li>
        <li><a href="#" data-toggle="tab">Clothing</a></li>
        <li><a href="#" data-toggle="tab">Bag & Shoes</a></li>
        <li><a href="#" data-toggle="tab">Jewellry & Watchs</a></li>
        <li><a href="#" data-toggle="tab">Men’s </a></li>
        <li><a href="#" data-toggle="tab">Women’s</a></li>
        <li><a href="#" data-toggle="tab">accessories</a></li>
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/1.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/2.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$40.60 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/3.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/4.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$30.99 </span>
                <del>$327.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/5.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/6.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$59.52</span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/7.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/8.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/9.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/10.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/11.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/12.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/13.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/14.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/fashion/2.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/fashion/3.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad2.jpg') }}" alt="" /></a>
  </div>
  <!-- End Adv -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="#" data-toggle="tab">food & drink</a></li>
        <li><a href="#" data-toggle="tab">  Hamburger </a></li>
        <li><a href="#" data-toggle="tab"> French fries</a></li>
        <li><a href="#" data-toggle="tab"> Doner Kebab</a></li>
        <li><a href="#" data-toggle="tab"> Cocktail</a></li>
        <li><a href="#" data-toggle="tab"> Apple Juice</a></li>
        <li><a href="#" data-toggle="tab"> Chocolate Milk</a></li>
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/1.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/2.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$40.60 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/3.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/4.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$30.99 </span>
                <del>$327.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/5.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/6.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$59.52</span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/7.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/8.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/9.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/10.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/11.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/12.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/2.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/3.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/food/4.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/food/5.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad3.jpg') }}" alt="" /></a>
  </div>
  <!-- End Adv -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="#" data-toggle="tab">furniture</a></li>
        <li><a href="#" data-toggle="tab"> Bathtime Goods</a></li>
        <li><a href="#" data-toggle="tab"> Shower</a></li>
        <li><a href="#" data-toggle="tab"> Blankets</a></li>
        <li><a href="#" data-toggle="tab"> Step Stools</a></li>
        <li><a href="#" data-toggle="tab"> Sectional Sofa </a></li>
        <li><a href="#" data-toggle="tab"> Coffee Table</a></li>
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/5.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/6.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$40.60 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/7.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/8.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$30.99 </span>
                <del>$327.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/9.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/10.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$59.52</span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/11.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/21.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/23.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/24.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/26.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/27.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/6.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/7.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/furniture/8.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/furniture/9.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad4.jpg') }}" alt="" /></a>
  </div>
  <!-- End Adv -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="#" data-toggle="tab">beauty & health</a></li>
        <li><a href="#" data-toggle="tab"> Clothing </a></li>
        <li><a href="#" data-toggle="tab">Bag & Shoes  </a></li>
        <li><a href="#" data-toggle="tab">Jewellry & Watchs</a></li>
        <li><a href="#" data-toggle="tab">Men’s </a></li>
        <li><a href="#" data-toggle="tab">Women’s </a></li>
        <li><a href="#" data-toggle="tab">accessories</a></li>
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/1.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/2.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$40.60 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/3.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/4.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$30.99 </span>
                <del>$327.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/5.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/6.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$59.52</span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/7.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/8.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/8.png') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/9.png') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/2.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/3.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/4.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/5.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="#" class="product-thumb-link">
                <img class="first-thumb" src="{{ URL::asset('assets/images/photos/beauty/6.jpg') }}" alt=""/>
                <img class="second-thumb" src="{{ URL::asset('assets/images/photos/beauty/7.jpg') }}" alt=""/>
              </a>
              <div class="product-info-cart">
                <div class="product-extra-link">
                  <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                  <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                  <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                </div>
                <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i>  Add to Cart</a>
              </div>
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="#">Burberry Pink & black </a></h3>
              <div class="info-price">
                <span>$87.00 </span>
                <del>$200.00</del>
              </div>
              <div class="product-rating">
                <div class="inner-rating" style="width:100%"></div>
                <span>(1s)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad5.jpg') }}" alt="" /></a>
  </div>
  <!-- End Adv -->
  <div class="list-partner list-partner11 clearfix">
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn1.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn2.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn3.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn4.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn5.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn6.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn7.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn8.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn9.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn10.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn11.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn12.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn13.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn14.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn15.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn16.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn17.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn18.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn19.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn20.png') }}"></a>
    <a class="partner-link" href="#"><img alt="" src="{{ URL::asset('assets/images/pn21.png') }}"></a>
  </div>
  <!-- End Partner -->
</div>
@endsection