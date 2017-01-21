<div id="panel-cart">
  <div class="panel panel-default cart">
    <div class="panel-body">
      <div class="order"> <span class="title">Đơn Hàng</span> <span class="title">( {{ array_sum($getlistProduct) }} SP )</span> <a href="{{route('gio-hang')}}" class="btn btn-default btn-custom1">Sửa</a> </div>
      <div class="product">
        <?php $total = 0; ?>
        @foreach($arrProductInfo as $product)
        <div class="item">
          <p class="title"><strong>{{ $getlistProduct[$product->id] }} x</strong><a href="" target="_blank">{{$product->name}}</a></p>
          <p class="price"> <span>
          <?php 
          if( $product->price_sale > 0 && $product->is_sale == 1){
            echo number_format($getlistProduct[$product->id] * $product->price_sale);  
          }else{
            echo number_format($getlistProduct[$product->id] * $product->price);
          }
          ?>&nbsp;₫ </span> </p>
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
      <p class="total"> Tạm Tính: <span>{{ number_format($total) }}&nbsp;₫</span> </p>                          
      <p class="shipping"> Phí vận chuyển: <span>Chưa có</span> </p>
      <p class="total2"> Thành tiền: <span>{{number_format( $total )}}&nbsp;₫ </span> </p>
      <p class="text-right"> <i>(Đã bao gồm VAT)</i> </p>
    </div>
  </div>
</div><!--panel-cart-->