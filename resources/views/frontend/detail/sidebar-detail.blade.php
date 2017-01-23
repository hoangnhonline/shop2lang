<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
  <div class="sidebar-shop sidebar-left">    
    @if($lienquanArr->count() > 0)
    <div class="widget widget-related-product">
      <h2 class="widget-title">RELATED PRODUCTS</h2>
      <ul class="list-product-related">
        @foreach($lienquanArr as $product)
        <li class="clearfix">
          <div class="product-related-thumb">
            <a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}"><img src="{{ Helper::showImage($product->image_url) }}" alt="{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}" /></a>
          </div>
          <div class="product-related-info">
            <h3 class="title-product"><a href="{{ $lang == 'vi' ? route('chi-tiet-vi',['slug' => $product->slug_vi, 'id' => $product->id]) : route('chi-tiet-en', ['slug' => $product->slug_en, 'id' => $product->id]) }}">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a></h3>
            <div class="info-price">
              @if($product->is_sale == 1 && $product->price_sale > 0)
                <span>{{ number_format($product->price_sale) }}$</span>
                <del>{{ number_format($product->price) }}$</del>
              @else
                <span>{{ number_format($product->price) }}$</span>
              @endif
            </div>           
          </div>
        </li>        
        @endforeach
      </ul>
    </div>
    @endif
    <!-- End Related Product -->
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