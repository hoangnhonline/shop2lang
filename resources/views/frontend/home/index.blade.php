@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="container">
<?php 
$lang_id = $lang == 'vi'  ? 1 : 2;
$bannerArr = DB::table('banner')->where(['object_id' => 1, 'object_type' => 3, 'lang_id' => $lang_id])->orderBy('display_order', 'asc')->get();
?>
@if($bannerArr)
  <div class="banner-slider5 simple-owl-slider">
    <div class="wrap-item">
      <?php $i = 0; ?>
      @foreach($bannerArr as $banner)
      <?php $i++; ?>
      <div class="item-banner5">
        <div class="banner-thumb">
          @if($banner->ads_url !='')
          <a href="{{ $banner->ads_url }}">
          @endif
          <img alt="decoos slide {{ $i }}" src="{{ Helper::showImage($banner->image_url) }}" title="decoos slide {{ $i }}">
          @if($banner->ads_url !='')
          </a>
          @endif
        </div>
        <!--<div class="banner-info">
          <h3>happy new year 2016</h3>
          <h2>exta 45% off </h2>
          <a href="#" class="shop-now">shop now</a>
        </div>-->
      </div>
      @endforeach
    </div>
  </div>
@endif
  @foreach($loaiSpList as $loaiSp)
  <!-- End Price Shipping -->
  <div class="content-popular11">
    <div class="popular-cat-title">
      <ul>
        <li class="active"><a href="{{ $lang == 'vi' ? route('danh-muc-cha', [$loaiSp->slug_vi]) : route('danh-muc-cha', [$loaiSp->slug_en]) }}" data-toggle="tab">{{ $lang == 'vi' ? $loaiSp->name_vi : $loaiSp->name_en }}</a></li>
        @if(!empty($cateList[$loaiSp->id]))
        @foreach($cateList[$loaiSp->id] as $cate)      
        <li> <a href="{{ $lang == 'vi' ? route('danh-muc-con', [$loaiSp->slug_vi, $cate->slug_vi]) : route('danh-muc-con', [$loaiSp->slug_en, $cate->slug_en]) }}">{{ $lang == "vi" ? $cate->name_vi : $cate->name_en }}</a>    </li> 
        @endforeach
        @endif
       
      </ul>
    </div>
    <div class="popular-cat-slider popular-cat-slider11 slider-home5">
      <div class="wrap-item">
        @if($productArr[$loaiSp->slug_vi]->count() > 0)
        @foreach($productArr[$loaiSp->slug_vi] as $product)
        <div class="item">
          <div class="item-product5">
            <div class="product-thumb product-thumb5">
              <a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}" class="product-thumb-link">
                <img class="first-thumb" src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}"  />
                <img class="second-thumb" src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}"  />              
              </a>
              @if($product->price > 0 || $product->price_vnd > 0)
              <div class="product-info-cart">                
                <a class="addcart-link" href="javascript:void(0)" data-id="{{ $product->id }}"><i class="fa fa-shopping-basket"></i> {{ trans('text.mua-hang') }}</a>
              </div>
              @endif
            </div>
            <div class="product-info5">
              <h3 class="title-product"><a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a></h3>
              <div class="info-price">
                @if($product->is_sale == 1 && $product->price_sale > 0)
                  <span>{{ number_format($product->price_sale) }}$</span>
                  <del>{{ number_format($product->price) }}$</del>
                @else
                  
                  @if($lang == 'en' && $product->price_vnd > 0)
                  <span>{{ $product->price > 0 ? number_format($product->price)."$" : "Liên hệ" }}</span><br>
                  <span>{{ $product->price_vnd > 0 ? number_format($product->price_vnd)." VND" : "Liên hệ" }}</span>
                  @else
                  <span>{{ $product->price_vnd > 0 ? number_format($product->price_vnd) : "Liên hệ" }}</span>
                  @endif
                @endif               
              </div>             
            </div>
          </div>
        </div><!--items-->
        @endforeach
        @endif
      </div>
    </div>  
  </div>
  <!-- End Popular Product -->
  <!--<div class="simple-adv11 item-adv-simple">
    <a href="#"><img src="{{ URL::asset('assets/images/ad1.jpg') }}" alt="" /></a>
  </div>-->
  @endforeach
  
  <!-- End Adv -->
  <!--<div class="list-partner list-partner11 clearfix">
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
  </div>-->
  <!-- End Partner -->
</div>
@endsection