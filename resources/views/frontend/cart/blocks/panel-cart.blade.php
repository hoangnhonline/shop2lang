<div id="panel-cart">
  <div class="panel panel-default cart">
    <div class="panel-body">
      <div class="order"> <span class="title">{{ trans('text.don-hang') }}</span> <span class="title">( {{ array_sum($getlistProduct) }} {{ trans('text.san-pham') }} )</span> <a href="{{route('gio-hang')}}" class="btn btn-default btn-custom1">{{ trans('text.sua') }}</a> </div>
      <div class="product">
        <?php $total = 0; ?>
        @foreach($arrProductInfo as $product)
        <div class="item">
          <p class="title"><strong>{{ $getlistProduct[$product->id] }} x</strong><a href="" target="_blank">{{ $lang == 'vi' ? $product->name_vi : $product->name_en }}</a></p>
          <p class="price"> <span>
          <?php 
          if( $product->price_sale > 0 && $product->is_sale == 1){
            echo number_format($getlistProduct[$product->id] * $product->price_sale);  
          }else{
            echo number_format($getlistProduct[$product->id] * $product->price);
          }
          ?>$ </span> </p>
        </div>
        <?php                             
        if( $product->price_sale > 0 && $product->is_sale == 1){
          $total = $total += $getlistProduct[$product->id]*($product->price_sale);  
        }else{
          $total = $total += $getlistProduct[$product->id]*($product->price);                             
        }
        ?>
        @endforeach
      </div>
      <p class="total"> {{ trans('text.tam-tinh') }}: <span>{{ number_format($total) }}$</span> </p>
      <p class="total2"> {{ trans('text.thanh-tien') }}: <span>{{number_format( $total )}}$ </span> </p>
      <p class="text-right"> <i>({{ trans('text.da-bao-gom-vat') }})</i> </p>
    </div>
  </div>
</div><!--panel-cart-->